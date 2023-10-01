

<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
    }

    /* Table Styles */
    table {
        margin: 0 auto;
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    th {
        background-color: #008CBA;
        color: white;
    }

    td, th {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
/* Buttons */
.btn {
    padding: 10px 20px;
    background-color: #008CBA;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

.btn-primary {
    background-color: #008CBA;
}

.btn-danger {
    background-color: #FF5733;
}

/* Hover effect for buttons */
.btn:hover {
    background-color: red; /* Change the background color on hover */
}

/* Print Styles */
@media print {
    /* Hide elements when printing */
    .print-hidden {
        display: none;
    }
}


        /* Additional styles for the printed page */
        body {
            margin: 0;
            text-align: center;
        }

        table {
            margin: 0 auto;
            width: 80%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        th {
            background-color: #008CBA;
            color: white;
        }

        td, th {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    }


    <style>
    @media print {
        .print-hidden {
            display: none;
        }
    }
</style>

</style>
<?php
// Include your connection.php file
include 'connection.php';

// Check if the database connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define your $startDate, $endDate, and $churchQuery values here
$startDate = isset($_POST['start_date']) ? $_POST['start_date'] : '';
$endDate = isset($_POST['end_date']) ? $_POST['end_date'] : '';
$churchQuery = isset($_POST['church']) ? $_POST['church'] : '';


// Fetch the church name from the database based on $churchQuery
$churchName = fetchChurchName($conn, $churchQuery);

// Display the table with data
displayTable($conn, $startDate, $endDate, $churchName);

// Close the database connection
mysqli_close($conn);

// Function to retrieve the church name
function fetchChurchName($conn, $churchQuery) {
    $sql = "SELECT DISTINCT church FROM expenditure WHERE church LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Error preparing SQL statement: " . mysqli_error($conn));
    }

    $churchQuery = "%" . $churchQuery . "%";
    mysqli_stmt_bind_param($stmt, 's', $churchQuery);

    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Use the fetched church name
            return $row['church'];
        } else {
            // Use the default value if no result is found
            return $churchQuery;
        }
    } else {
        die("Error executing SQL statement: " . mysqli_error($conn));
    }
}

// Function to display the table
function displayTable($conn, $startDate, $endDate, $churchQuery) {
    // Validate date format (assuming YYYY-MM-DD)
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $startDate) || !preg_match("/^\d{4}-\d{2}-\d{2}$/", $endDate)) {
        die("Invalid date format. Please enter dates in YYYY-MM-DD format.");
    }

    $sql = "SELECT * FROM expenditure WHERE date BETWEEN ? AND ?";
    $params = array($startDate, $endDate);

    // Add search criteria for the "church" field if it's not empty
    if (!empty($churchQuery)) {
        $sql .= " AND `church` LIKE ?";
        $params[] = "%$churchQuery%";
    }

    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die("Error preparing SQL statement: " . mysqli_error($conn));
    }

    // Bind parameters
    $types = str_repeat('s', count($params)); // Assuming all parameters are strings
    mysqli_stmt_bind_param($stmt, $types, ...$params);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            // Output table header
            echo "<table>";
            echo "<tr><th>DATE</th><th>ITEM PURCHASED</th><th>QUANTITY</th><th>AMOUNT</th><th>DESCRIPTION</th><th>STEWARD NAME</th><th class='print-hidden'>EDIT</th><th class='print-hidden'>DELETE</th></tr>";

            $totalAmount = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["itemname"] . "</td>";
                 echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "<td>" . $row["loginName"] . "</td>";
                echo "<td class='print-hidden'><a href='edit_expenditure.php?date=" . $row["date"] . "&loginName=" . urlencode($row["loginName"]) . "&id=" . $row["id"] . "&church=" . urlencode($churchQuery) . "'>Edit</a></td>";
                echo "<td class='print-hidden'><a href='delete_expenditure.php?date={$row["date"]}&loginName=" . urlencode($row["loginName"]) . "&id={$row["id"]}&church=" . urlencode($churchQuery) . "'>Delete</a></td>";
                echo "</tr>";

                // Calculate total amount
                $totalAmount += floatval($row["amount"]);
            }

            // Output total row
            echo "<tr><td colspan='3'>Total Amount:</td><td>$totalAmount</td><td></td><td></td><td></td><td></td></tr>";

            // Add print button
            echo "</table>"; // Close the table
            echo "<button class='btn btn-primary print-button' onclick='printTable(\"$startDate - $endDate\", \"$churchQuery\")'>Print</button>";
        } else {
            echo "<tr><td colspan='8'>No results found.</td></tr>";
        }
    } else {
        die("Error executing SQL statement: " . mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
}
?>


<script>
    function printTable(selectedFor, church) {
        var tableHeader = '<h1>THE METHODIST CHURCH OF GHANA</h1>' +
            '<h2>' + church + '</h2>' +
          
            '<h1>EXPENDITURE REPORT</h1>';

        var logo = "<img src='dist/img/logo.png' alt='Logo' style='position:absolute; top:0; right:0; width:80px; height:80px; margin-top:20px; margin-right:50px;'>";
        var printWindow = window.open("", "", "height=800,width=800");
        printWindow.document.write('<html><head><style>@page { size: auto; margin: 0; } body { margin: 0; text-align: center; }</style>');
        printWindow.document.write('<style>table { margin: 0 auto; width: 80%; border-collapse: separate; border-spacing: 0; }' +
            'th { background-color: #008CBA; color: white; }' +
            'td, th { border: 1px solid black; padding: 8px; text-align: center; }' +
            '.print-hidden { display: none; }' +
            '</style></head><body>');

        // Display the church as a subheader
        printWindow.document.write('<p>' + tableHeader + '</p>');
        printWindow.document.write('<p>' + logo + '</p>');

        var table = document.querySelector("table").cloneNode(true);
        var deleteButtons = table.querySelectorAll(".print-hidden");
        for (var i = 0; i < deleteButtons.length; i++) {
            var deleteButtonCell = deleteButtons[i];
            deleteButtonCell.style.display = "none";
        }

        printWindow.document.write(table.outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.onload = function () {
            printWindow.focus();
            printWindow.print();
            printWindow.close();
        };
    }
</script>
</body>
</html>
