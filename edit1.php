<?php
// Define database connection variables
include 'connection.php';

// Initialize variables
$date = ''; // Initialize $date

// Check if the date parameter exists in the URL
if (isset($_GET['date'])) {
    $date = $_GET['date'];

    // Use prepared statement to prevent SQL injection
    $select = "SELECT * FROM mdf WHERE date=?";
    $stmt = mysqli_prepare($conn, $select);
    mysqli_stmt_bind_param($stmt, 's', $date);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if the query is successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
    } else {
        echo "Error: Record not found.";
        exit();
    }
}

// Check if the update button is clicked
if (isset($_POST['update_btn'])) {
    $amount = $_POST['amount'];
    $loginName = $_POST['loginName'];
    $id = $_POST['id'];

    // Update the record with the given date in the "money" table
    $update = "UPDATE mdf SET amount=? WHERE date=?";
    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt, 'ss', $amount, $date);
    $result = mysqli_stmt_execute($stmt);

    // Check if the query is successful
    if ($result) {
        // Construct the URL with loginName and id and redirect to the same page (edit.php)
        $url = "view.php?date=" . urlencode($date) . "&loginName=" . urlencode($loginName) . "&id=" . urlencode($id);

        echo '<script type="text/javascript">
                    alert("Data Updated Successfully");
                    window.location.href = "' . $url . '"; // Redirect to the same page
                  </script>';
        include 'pages/urlupload.php';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<h1>THE METHODIST CHURCH GHANA</h1>
<h2>MDF UPDATE</h2>
<h3><b>EDIT</b></h3>

<div>
    <form action="" method="POST" enctype="multipart/form-data">
        <?php if (!empty($row['date'])): ?>
            <input type="hidden" name="date" value="<?php echo htmlspecialchars($row['date']); ?>">
            <input type="hidden" name="loginName" value="<?php echo htmlspecialchars($row['loginName']); ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
        <?php endif; ?>

        <label for="date">DATE:</label>
        <input type="text" id="date" name="date" placeholder="Enter date" value="<?php echo htmlspecialchars(isset($row['date']) ? $row['date'] : ''); ?>"><br><br>

        <label for="amount">AMOUNT:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter amount" value="<?php echo isset($row['amount']) ? htmlspecialchars($row['amount']) : ''; ?>"><br><br>

        <input type="submit" name="update_btn" value="Update">
    </form>

    <script>
        function sendData() {
            // Get the values of date, amount, loginName, and id from the form
            var date = document.getElementById('date').value;
            var amount = document.getElementById('amount').value;
            var loginName = document.getElementById('loginName').value;
            var id = document.getElementById('id').value;

            // Construct the URL with the values and redirect to the same page (edit.php)
            var url = "view.php?date=" + encodeURIComponent(date) + "&amount=" + encodeURIComponent(amount) + "&loginName=" + encodeURIComponent(loginName) + "&id=" + encodeURIComponent(id);

            window.location.href = url;
        }
    </script>
</div>
