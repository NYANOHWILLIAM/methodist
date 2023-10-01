<?php
// Database configuration
include 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted for deletion
if (isset($_POST['delete'])) {
    // Retrieve the record ID to be deleted
    $id = $_POST['id'];

    // Check if loginName and church parameters exist in the URL
    if (isset($_GET['loginName']) && isset($_GET['church'])) {
        // Retrieve the necessary variables from the URL
        $loginName = $_GET['loginName'];
        $church = $_GET['church'];

        // Delete the record from the visitors table
        $sql = "DELETE FROM visitors WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            // Print JavaScript code for alert and redirection
            echo '<script type="text/javascript">';
            echo 'alert("Data Deleted Successfully");';
            echo 'window.open("http://localhost/new/visitors_update.php?loginName=' . $loginName . '&id=' . $id . '&church=' . $church . '", "_self");';
            echo '</script>';
            exit(); // Terminate the current script
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "loginName or church parameters not found in the URL.";
    }
}

// Close the database connection
$conn->close();
?>












