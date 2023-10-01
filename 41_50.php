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
    <a href="enrolment_display.php?loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star nav-icon" style="font-size: 14px;"></i>
        back
    </a>
</li><br><br>





  
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
             
<!DOCTYPE html>
<html>
<head>
<style>
    body{
        text-align: center;
    }

    form {
            max-width: 500px;
            margin: 20px auto;
            background-color:GRAY;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
            height: 9rem;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

  h2{
    text-align: center;
  }
    /* Style for the table */
    /* Default styles for the table */
table {
    width: 60%;
    border-collapse: collapse;
    margin-top: 5px;
    margin-left: auto;
    margin-right: auto; /* Center the table horizontally */
    font-size: 14px;
}

/* Style for table headers */
th {
    background-color: #008CBA;
    color: white;
    padding: 8px;
    text-align: left;
}

/* Style for table cells */
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Alternate row background color */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover effect for table rows */
tr:hover {
    background-color: #ddd;
}

/* Media query for mobile devices */
@media (max-width: 768px) {
    table {
        width: 100%;
    }
}

/* Style for the print button */
button {
    background-color: #008CBA;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-top: 20px;
    margin-bottom: 20px; /* Add margin at the bottom */
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

/* Center the button */
button {
    display: block;
    margin: 0 auto;
}

/* Hover effect for the button */
button:hover {
    background-color: red; /* Change the background color on hover */
}


    /* Media query for mobile devices */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        th, td {
            padding: 6px;
        }
    }






</style>
   

<?php include 'pages/church.php';?>

<?php
// Database connection configuration
include 'connection.php';

// Check if the connection was successful
if ($conn === null) {
    die("Connection failed: Unable to connect to the database.");
}

// Retrieve the church from the URL (replace 'church' with the actual parameter name)
$churchFromURL = $_GET['church'] ?? ''; // Use the null coalescing operator to set a default value if the parameter is not provided

// Check if the church parameter is provided
if (empty($churchFromURL)) {
    die("Church parameter is missing in the URL.");
}

// Query to get the total number of records where age is between 41 and 50 years for the specified church
$sql = "SELECT COUNT(*) AS total_count FROM registration WHERE DATEDIFF(CURDATE(), dob) / 365 BETWEEN 41 AND 50 AND church = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Preparation of query failed: " . $conn->error);
}

$stmt->bind_param("s", $churchFromURL);
$stmt->execute();
$result = $stmt->get_result();

if ($result !== false && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalCount = $row['total_count'];
    
    echo "ADULTS AGED 41-50 YEARS at $churchFromURL<br>";
    echo "Total number of adults aged 41-50 years: " . $totalCount . "<br>";
} else {
    echo "No data found for adults aged 41-50 years at $churchFromURL.";
}

// Close the prepared statement
$stmt->close();

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
