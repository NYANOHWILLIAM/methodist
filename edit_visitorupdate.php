



<?php
// Define database connection variables
include 'connection.php';

// Check if the date parameter exists in the URL
if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $church = $_GET['church'];

    // Select the record with the given date from the "attend" table
    $select = "SELECT * FROM attend WHERE date='$date'";
    $result = mysqli_query($conn, $select);

    // Check if the query is successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $id = $row['id']; // Assigning $id from the retrieved row
    } else {
        echo "Error: Record not found.";
        exit();
    }
}

// Check if the update button is clicked
if (isset($_POST['updater_btn'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $residence = $_POST['residence'];
   
    // Update the record with the given date in the "attend" table
    $update = "UPDATE visitors SET name='$name', contact='$contact', residence='$residence' WHERE id='$id'";
    $result = mysqli_query($conn, $update);

    // Check if the query is successful
    if ($result) {
        $loginName = $row['loginName'];

        echo '<script type="text/javascript">
            alert("Data Updated Successfully");
            window.location.href = "attendselect.php?loginName=' . $loginName . '&id=' . $id . '&church=' . $church .'";
        </script>';
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<h2>MDF UPDATE</h2>
<h3><b>EDIT</b></h3>
<form action="" method="POST" enctype="multipart/form-data">
    <?php if (!empty($row['date'])): ?>
        <input type="hidden" name="date" value="<?php echo htmlspecialchars($row['date']); ?>">
        <input type="hidden" name="loginName" value="<?php echo htmlspecialchars($row['loginName']); ?>">
        <input type="hidden" name="church" value="<?php echo htmlspecialchars($row['church']); ?>">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
    <?php endif; ?>

    <label for="name">NAME:</label>
    <input type="text" id="name" name="name" placeholder="" value="<?php echo htmlspecialchars(isset($row['name']) ? $row['name'] : ''); ?>"><br>

    <label for="contact">CONTACT:</label>
    <input type="number" id="contact" name="contact" placeholder="" value="<?php echo htmlspecialchars(isset($row['contact']) ? $row['contact'] : ''); ?>"><br>

    <label for="residence">RESIDENCE:</label>
    <input type="residence" name="residence" id="residence" placeholder="" value="<?php echo htmlspecialchars(isset($row['residence']) ? $row['residence'] : ''); ?>"><br>

  

    <input type="submit" name="update_btn" value="Update">
</form><br><br><br><br><br>

<script>
    function sendData() {
        // Get the values of date, church, loginName, and id from the form
        var date = document.getElementsByName('date')[0].value;
        var church = document.getElementsByName('church')[0].value;
        var loginName = document.getElementsByName('loginName')[0].value;
        var id = document.getElementsByName('id')[0].value;

        // Construct the URL with the values and redirect to the same page (attendselect.php)
        var url = "attendselect.php?date=" + encodeURIComponent(date) + "&church=" + encodeURIComponent(church) + "&loginName=" + encodeURIComponent(loginName) + "&id=" + encodeURIComponent(id);

        window.location.href = url;
    }
</script>


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




