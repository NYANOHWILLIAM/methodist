<?php
// Define database connection variables
$host = "localhost";
$username = "root";
$password = "";
$database = "methodist";

// Create a database connection
$con = mysqli_connect($host, $username, $password, $database);

// Check if the connection is successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$date = $_GET['date'];
$query = "DELETE FROM welfare WHERE date = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "s", $date);
$result = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($result) {
?>
	       <script type="text/javascript">
	       	alert('Data Deleted Successfully.Refresh your page');
             window.history.back();
       
  
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
