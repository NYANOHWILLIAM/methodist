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
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}


?>

<li class="nav-item">
    <a href="departments.php?loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star nav-icon" style="font-size: 14px;"></i>
        back
    </a>
</li><br><br>





  
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
             
 <style>
    body {
        text-align: center;

           align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f2f2f2;
    }

    .container {
      text-align: center;
    }

    .notification {
      color: red;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .birthday-message {
      font-size: 16px;
      margin-bottom: 5px;
    }

   .send-btn {
      margin-top: 10px;
      width: 20%;
      background-color: red;
      color: white;
      transition: background-color 0.3s, color 0.3s; /* Added transition for background-color and color */
    }

    .send-btn:hover {
      background-color:black; /* Updated background color on hover */
      color:whitesmoke; /* Updated text color on hover */
    }
    h1{
        text-align: center;
    }






  </style>

<?php
// Database connection configuration
include 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'church' parameter is set in the URL
if (isset($_GET['church'])) {
    $churchFromURL = $_GET['church'];

    // Check if the 'loginName' parameter is set in the URL
    if (isset($_GET['loginName'])) {
        $loginNameFromURL = $_GET['loginName'];
    } else {
        $loginNameFromURL = ''; // Set a default value or handle the case where 'loginName' is not provided.
    }

    // Query to retrieve records of individuals with a birthday due for a specific church
    $sql = "SELECT firstname, middlename, lastname, DATE_FORMAT(dob, '%Y-%m-%d') AS birthday, TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age FROM registration WHERE MONTH(dob) = MONTH(CURDATE()) AND DAY(dob) = DAY(CURDATE()) AND church = ?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $churchFromURL);
    
    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result !== false && $result->num_rows > 0) {
        $count = $result->num_rows;
        $notificationMessage = "Notification: There are $count birthday wishes to be sent for $churchFromURL!";
        echo "<div class='notification'>$notificationMessage</div>";
        
        // JavaScript code to display an alert notification
        echo "<script>";
        echo "alert('$notificationMessage');";
        echo "</script>";

        while ($row = $result->fetch_assoc()) {
            $firstName = $row['firstname'];
            $middleName = $row['middlename'];
            $lastName = $row['lastname'];
            $birthday = $row['birthday'];
            $age = $row['age'];
            
            echo "<div class='birthday-message'>";
            echo "Wishing $firstName $middleName $lastName a happy $age<sup>th</sup> birthday on $birthday!";
            
            // Add a button to send the parameters to birthdaysent.php using GET method
            echo "<form action='birthdaysent.php' method='GET'>";
            echo "<input type='hidden' name='loginName' value='$loginNameFromURL'>";
            echo "<input type='hidden' name='church' value='$churchFromURL'>";
            echo "<input type='submit' value='Send Wishes'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "No birthday wishes to be sent for $churchFromURL at the moment.";
    }
} else {
    echo "Please provide a 'church' parameter in the URL.";
}

// Close the database connection
$conn->close();
?>


<br><br><br><br><br><br>
            
 




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
