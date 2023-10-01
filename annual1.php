<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">




</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">SIGN OUT</a>
      </li>
      

            <!-- Add CSS for hover effect and color change -->
<style>
  /* Navbar Link Hover Effect */
  .navbar-nav li.nav-item:hover .nav-link {
    color: red;
  }

  /* Change color of active link */
  .navbar-nav li.nav-item.active .nav-link {
    color: red;
  }
</style>




  </nav>
  <!-- /.navbar -->

<?php include 'pages/sidebarcontainer.php'; ?>

<?php include 'pages/urlupload.php'; ?>

   



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

<?php
// Check if 'loginName' exists in the URL
if (isset($_GET['loginName'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}

// Check if 'id' exists in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Handle the case where 'id' is not in the URL
    $id = ''; // You can set it to a default value or handle the error accordingly
}
?>

<li class="nav-item">
      <a href="departments.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        back
    </a>
</li><br>


     

<?php
// Check if 'loginName' exists in the URL
if (isset($_GET['loginName'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}

// Check if 'id' exists in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Handle the case where 'id' is not in the URL
    $id = ''; // You can set it to a default value or handle the error accordingly
}
?>

<li class="nav-item">
      <a href="annualsearch.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-users" style="font-size: 14px;"></i>
          view total contribution 
    </a>
</li><br>

                 
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
                       



<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<style>
.specific-image {
  position: absolute;
  top: 0;
  right: 0;
  width: 110px;
  height: auto;
  margin: 10px;
  border: 5px solid #000;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}
</style>

<style>
body{
  text-align: center;
  background-color: gray;
 
}

h2 {
  text-align: center;
  margin-left: 0px;
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left:0px;

}

label {
  font-weight: bold;
  margin-right: 10px;
}

input[type="submit"] {
  font-size: 16px;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  height: 50px;
  width: 100px;
}

input[type="text"],
input[type="number"] {
  margin-right: 5px;
  border: 2px solid black;
  box-shadow: 5px;
  box-shadow: 0 0 2px;
  width: 200px;
  height: 50px;
  font-size: 18px;
  text-align: center;
}

input[type="submit"] {
  background-color: blue;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: red;
}

h2 {
  margin-top: 20px;
  font-size: 24px;
  text-align: center;
  color: white;
}

p {
  font-size: 16px;
  margin-bottom: 10px;
}


button a {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  background-color: red;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  border: none;
  transition: background-color 0.3s ease-in-out;
}

button a:hover {
  background-color: black;
}

button {
  margin: 20px 0;
  text-align: center;
}
button {
  margin-right: 10px;
  font-size: 10px;
  margin-left: 30px ;
}

<style>
</style>
</style>
<body>

  <h2>ANNUAL HARVEST FUND</h2>


<form method="post">
  <label for="search">Search:</label>
  <input type="text" name="search" id="search" placeholder="Enter ID">
  <input type="submit" value="SUBMIT"><br><br>

 </form>




<?php
include 'connection.php';

// Check if $loginName is defined (you should define it somewhere in your code)
if (!isset($loginName)) {
  echo "Error: loginName is not defined.";
  exit; // Exit the script
}

// Handle search query
if (isset($_POST['search'])) {
  $search = mysqli_real_escape_string($conn, $_POST['search']); // Sanitize input to prevent SQL injection
  $sql = "SELECT * FROM registration WHERE id = '$search'";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    // Handle query error
    echo "Error: " . mysqli_error($conn);
    exit; // Exit the script
  }

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $lastname = $row['lastname'];
    $pic = $row['pic'];
    $contact = $row['contact'];

    // Build full name
    $name = $firstname . ' ' . $middlename . ' ' . $lastname;

    // Retrieve the 'church' parameter from the URL
    $church = isset($_GET['church']) ? $_GET['church'] : '';

    // Check if the 'church' parameter matches the church in the registration
    if ($church !== $row['church']) {
      echo "<p>Error: The member does not exists.</p>";
    } else {
      // Check if the record with the same 'id' already exists in the 'welfare' table
      $checkDuplicateSql = "SELECT id FROM annual WHERE id = ?";
      $stmt = mysqli_prepare($conn, $checkDuplicateSql);
      mysqli_stmt_bind_param($stmt, "s", $id);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);

      if (mysqli_stmt_num_rows($stmt) > 0) {
        // Display proceed button if the record already exists
        echo "<p>The selected member already exists. Proceed to enter a record.</p>";
        echo "<h2>MEMBER INFO:</h2>";
        echo "<p>ID: $id</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Contact: $contact</p>";
        if (!empty($pic) && file_exists("register/$pic")) {
          echo "<img src='register/$pic' alt='Member Image'><br><br>";
        } else {
          echo "<p>No image available for this member.</p>";
        }
        echo "<button style='margin-right: 10px;'><a href='annual.php?id=$id&contact=$contact&firstname=$firstname&middlename=$middlename&lastname=$lastname&loginName=$loginName&church=$church'>PROCEED</a></button>";
      } else {
        // Insert the member into the mdf table (I assume $loginName is defined elsewhere)
        $insertSql = "INSERT INTO annual (id, loginName, firstname, middlename, lastname, pic, contact, church) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insertSql);
        mysqli_stmt_bind_param($stmt, "ssssssss", $id, $loginName, $firstname, $middlename, $lastname, $pic, $contact, $church);

        if (mysqli_stmt_execute($stmt)) {
          echo "<p>The selected member has been added successfully. Proceed to enter a record.</p>";
        } else {
          echo "Error updating welfare table: " . mysqli_error($conn);
        }

        // Display member info and image
        echo "<h2>MEMBER INFO:</h2>";
        echo "<p>ID: $id</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Contact: $contact</p>";
        if (!empty($pic) && file_exists("register/$pic")) {
          echo "<img src='register/$pic' alt='Member Image'><br><br>";
        } else {
          echo "<p>No image available for this member.</p>";
        }
         echo "<button style='margin-right: 10px;'><a href='annual.php?id=$id&contact=$contact&firstname=$firstname&middlename=$middlename&lastname=$lastname&loginName=$loginName&church=$church'>PROCEED</a></button>";
      }
    }
  } else {
    echo "No member found with that ID.";
  }

  mysqli_close($conn);
}
?>



<br><br><br><br>
















       
    </section>
    <!-- /.content -->
  </div>



<?php include 'pages/footer.php';?>

  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>




</html>
