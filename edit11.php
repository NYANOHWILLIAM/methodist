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

// Check if the date parameter exists in the URL
if (isset($_GET['date'])) {
    $date = $_GET['date'];

    // Select the record with the given date from the "mdf" table
    $select = "SELECT * FROM mdf WHERE date='$date'";
    $result = mysqli_query($con, $select);

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
    $date = $_POST['date'];
    $amount = $_POST['amount'];

    // Update the record with the given date in the "money" table
    $update = "UPDATE mdf SET amount='$amount' WHERE date='$date'";
    $result = mysqli_query($con, $update);

    // Check if the query is successful
    if ($result) {
        echo "<script>
            alert('Data Updated Successfully. Refresh your page');
            window.history.back();
            </script>";
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>

<h1>THE METHODIST CHURCH GHANA</h1>
<h2>MDF UPDATE</h2>
<h3><b>EDIT</b></h3>

<div>
    <form action="" method="POST" enctype="multipart/form-data"> 
        <?php if(isset($row['date'])): ?>
            <input type="hidden" name="date" value="<?php echo $row['date'] ?>">
        <?php endif; ?>

        <label>DATE:</label>
        <input type="text" name="date" placeholder="Enter date" value="<?php echo isset($row['date']) ? $row['date'] : ''; ?>"><br><br>

        <label>AMOUNT:</label>
        <input type="number" name="amount" placeholder="Enter amount" value="<?php echo isset($row['amount']) ? $row['amount'] : ''; ?>"><br><br>

        <input type="submit" name="update_btn" value="Update"><br>
    </form>
</div>

<img src="meth.png" alt="my image" class="specific-image">

     
<?php
$loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';

echo "<button style='margin-right: 30px;'><a href='mdf.php?loginName=" . urlencode($loginName) . "'>MDF ENTRY</a></button>";
echo "<button style='margin-right: 30px;'><a href='view.php?loginName=" . urlencode($loginName) . "'>DELETE/PRINT</a></button>";

?>

</div>
<style type="text/css">


button a {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  background-color:red;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  border: none;
  transition: background-color 0.3s ease-in-out;
}

button a:hover {
  background-color: black;
}


    img {
  width: 100px;
  height: 100px;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  position: fixed;
  top: 0;
  right: 0;
  margin-right: 150px;
border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); ;
}


body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

h1, h2, h3 {
  text-align: center;
}

form {
  width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;

}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 20px;
  text-align: center;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>