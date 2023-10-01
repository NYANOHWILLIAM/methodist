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
        <a href="index.php" class="nav-link">DASHBOARD</a>
      </li>
 
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
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
     $contact = $_GET['contact'];
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
    $contact = '';
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
    <a href="vieww2.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church)?>&contact=<?php echo urlencode($contact); ?>">
        <i class="fas fa-bars" style="font-size: 14px;"></i>
        back
    </a>
</li><br>
                 
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php
// Define database connection variables
include 'connection.php';

// Check if the date parameter exists in the URL
if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $church = $_GET['church'];

    // Select the record with the given date from the "attend" table
    $select = "SELECT * FROM welexpenditure WHERE date='$date'";
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
if (isset($_POST['update_btn'])) {
    $itemname = $_POST['itemname'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $message = $_POST['message'];


    // Update the record with the given date in the "attend" table
    $update = "UPDATE welexpenditure SET itemname ='$itemname', quantity='$quantity', amount='$amount', message='$message' WHERE id='$id'";
    $result = mysqli_query($conn, $update);

    // Check if the query is successful
    if ($result) {
        $loginName = $row['loginName'];

        echo '<script type="text/javascript">
            alert("Data Updated Successfully");
            window.location.href = "vieww2.php?loginName=' . $loginName . '&id=' . $id . '&church=' . $church .'";
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

    <label for="itemname">ITEMNAME:</label>
    <input type="text" id="itemname" name="itemname" placeholder="Enter itemname" value="<?php echo htmlspecialchars(isset($row['itemname']) ? $row['itemname'] : ''); ?>"><br>

    <label for="quantity">QUANTITY:</label>
    <input type="number" name="quantity" id="quantity" placeholder="Enter the number here" value="<?php echo htmlspecialchars(isset($row['quantity']) ? $row['quantity'] : ''); ?>"><br>

     <label for="amount">AMOUNT:</label>
    <input type="text" id="amount" name="amount" placeholder="" value="<?php echo htmlspecialchars(isset($row['amount']) ? $row['amount'] : ''); ?>"><br>

    <label for="message">Message:</label>
    <input type="textarea" name="message" id="message" placeholder="Enter the message here" value="<?php echo htmlspecialchars(isset($row['message']) ? $row['message'] : ''); ?>"><br>

    <input type="submit" name="update_btn" value="Update">
</form><br><br><br><br><br>

<script>
    function sendData() {
        // Get the values of date, church, loginName, and id from the form
        var date = document.getElementsByName('date')[0].value;
        var church = document.getElementsByName('church')[0].value;
        var loginName = document.getElementsByName('loginName')[0].value;
        var id = document.getElementsByName('id')[0].value;
         var contact = document.getElementsByName('contact')[0].value;

        // Construct the URL with the values and redirect to the same page (vieww2.php)
        var url = "vieww2.php?date=" + encodeURIComponent(date) + "&church=" + encodeURIComponent(church) + "&loginName=" + encodeURIComponent(loginName) + "&id=" + encodeURIComponent(id)+ "&contact=" + encodeURIComponent(contact);

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


input[type="textarea"],
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
