

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

   

        // Validate and sanitize form data
        $selectedFor = isset($_POST['cells']) ? mysqli_real_escape_string($conn, $_POST['cells']) : "";
        $year = isset($_POST['year']) ? mysqli_real_escape_string($conn, $_POST['year']) : "";

        // Validate year format (assuming YYYY)
        if (!preg_match("/^\d{4}$/", $year)) {
            die("Invalid year format. Please enter a valid year (YYYY).");
        }

        // Search query for the "church" field
        $churchQuery = isset($_POST['church']) ? mysqli_real_escape_string($conn, $_POST['church']) : "";

        $sql = "SELECT * FROM attend WHERE `cells` = '$selectedFor' AND YEAR(date) = '$year'";

        // Add search criteria for the "church" field if it's not empty
        if (!empty($churchQuery)) {
            $sql .= " AND `church` LIKE '%$churchQuery%'";
        }

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output table header
            echo "<table>";
         echo "<tr><th>DATE</th><th>CELLS</th><th>CHURCH</th><th>MALE</th><th>FEMALE</th><th>STEWARD</th></td></tr>";


            $total_contribution = 0;
            $total_number = 0;
            $total_number1 = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                // Define the variables $loginName and $church
                $loginName = $row["loginName"];
                $church = $row["church"];

                // Output table rows
                echo "<tr>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["cells"] . "</td>";
                echo "<td>" . $row["church"] . "</td>";
                echo "<td>" . $row["number"] . "</td>";
                echo "<td>" . $row["number1"] . "</td>";
                echo "<td>" . $row["loginName"] . "</td>";
                echo "<td class='print-hidden'><a href='edit_attendance.php?date=" . $row["date"] . "&loginName=" . urlencode($loginName) . "&id=" . $row["id"] . "&church=" . urlencode($church) . "'>Edit</a></td>";
                echo "<td class='print-hidden'><a href='delete_attendance.php?date={$row["date"]}&loginName=" . urlencode($loginName) . "&id={$row["id"]}&church=" . urlencode($church) . "'>Delete</a></td>";

                echo "</tr>";

                // Calculate totals
                $total_contribution += $row["number"] + $row["number1"];
                $total_number += $row["number"];
                $total_number1 += $row["number1"];
            }

            // Output total rows
            echo "<tr><th colspan='3'>Total MALE</th><td>" . $total_number . "</td><td colspan='3'></td></tr>";
            echo "<tr><th colspan='3'>Total FEMALE</th><td>" . $total_number1 . "</td><td colspan='3'></td></tr>";
            echo "<tr><th colspan='3'>Total NO. ATTENDANCE</th><td>" . $total_contribution . "</td><td colspan='3'></td></tr>";
            echo "</table>";

            // Add print button
            echo "<br><button class='btn btn-primary print-button' onclick='printTable(\"$selectedFor\", \"$year\", \"$churchQuery\")'>Print</button>";
        } else {
            echo "<p>No results found.</p>";
        }

        mysqli_close($conn);
    
?>

<script>
    function printTable(selectedFor, year, church) {
        var tableHeader = '<h1>THE METHODIST CHURCH OF GHANA</h1>\n' +
            '<h2>' + church + '</h2>' +
            '<h2> ' + selectedFor + '</h2>' +
            '<h1>ATTENDANCE REPORT</h1>';

        var logo = "<img src='dist/img/logo.png' alt='Logo' style='position:absolute; top:0; right:0; width:80px; height:80px; margin-top:20px; margin-right:50px;'>";
        var printWindow = window.open("", "", "height=800,width=800");
        printWindow.document.write('<html><head><style>@page { size: auto; margin: 0; } body { margin: 0; text-align: center; }</style>');
        printWindow.document.write('<style>table { margin: 0 auto; width: 80%; border-collapse: separate; border-spacing: 0; }' +
            'th { background-color: #008CBA; color: white; }' +
            'td, th { border: 1px solid black; padding: 8px; text-align: center; }' +
            '.print-hidden { display: none; }' +
            '</style></head><body>');

        // Separate the headers into paragraphs
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
