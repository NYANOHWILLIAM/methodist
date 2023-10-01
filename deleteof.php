
<?php
// Define database connection variables
include 'connection.php';

// Sanitize and validate the input
$date = $_GET['date'] ?? '';
if (empty($date)) {
    die("Invalid date provided.");
}

$query = "DELETE FROM collection WHERE date = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $date);
$result = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($result) {
    $loginName = $_GET['loginName'] ?? '';
    $id = $_GET['id'] ?? '';
    
    // Check if both loginName and id are present in the URL
    if (!empty($loginName) && !empty($id)) {
        // Redirect with URL parameters
        $redirectUrl = "http://localhost/new/viewof.php?loginName=" . urlencode($loginName) . "&id=" . urlencode($id);
        header("Location: $redirectUrl");
        exit();
    } else {
        die("Missing loginName or id in the URL.");
    }
} else {
?>
    <script type="text/javascript">
        alert("Data Deletion Failed. Please try again.");
        // You can choose to redirect the user here if needed
    </script>
<?php
}
?>
