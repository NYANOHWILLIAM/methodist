<?php
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE FROM welfareexecutive WHERE id = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
$result = mysqli_stmt_execute($stmt);

if ($result) {
?>
	<script type="text/javascript">
		alert("Data Deleted Successfully");
		window.open("http://localhost/church/query1.php", "_self")
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
