<?php
// Define database connection variables
include 'connection.php';

$date = $_GET['date'];
$query = "DELETE FROM expenditure WHERE date = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $date);
$result = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($result) {
    $loginName = $_GET['loginName']; // Get loginName from the URL
    $id = $_GET['id']; // Get id from the URL
     $church = $_GET['church'];
?>
    <script type="text/javascript">
        alert("Data Deleted Successfully");
        // Send loginName and id to view.php using URL parameters
        window.open("http://localhost/new/vieww.php?loginName=<?php echo $loginName ?>&id=<?php echo $id ?>&church=<?php echo $church ?>", "_self");
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Please try again");
    </script>
<?php
}
?>
