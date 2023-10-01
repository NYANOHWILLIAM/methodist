<?php
// connection.php

// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with actual connection details
$host = 'localhost';
$username = 'root';
$password = ''; // Change this to your actual database password
$database = 'methodist';

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

