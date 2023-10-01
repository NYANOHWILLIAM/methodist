<?php
// Database configuration
include 'Connection.php';

// Function to get URL parameters
function getParameter($param) {
    return isset($_GET[$param]) ? $_GET[$param] : '';
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted for editing
if (isset($_POST['edit'])) {
    // Retrieve the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $residence = $_POST['residence'];

    // Update the record in the visitors table
    $sql = "UPDATE visitors SET name='$name', contact='$contact', residence='$residence' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        // Get the "church" and "loginName" from the URL
        $church = getParameter('church');
        $loginName = getParameter('loginName');
        
        // Redirect to visitors.php with success message and parameters
        header("Location: visitors_update.php?church=$church&loginName=$loginName&success=1");
        exit(); // Terminate the current script
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Check if the success parameter is set, and display a success message if it is
$success = getParameter('success');
if ($success == 1) {
    echo "<p>Record updated successfully.</p>";
}

// Close the database connection
$conn->close();
?>
