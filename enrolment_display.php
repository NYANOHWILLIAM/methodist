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
             


<h3>ENROLMENTS</h3>

<style>
  body {
    text-align: center;
    background-color: ;
  }

  h1, h3 {
    text-align: center;
  }

  .form-container {
    border: 1px solid black;
    padding: 2px;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    text-align: center;
  }

  .form-container a {
    display: flex;
    margin: 5px;
    border-radius: 5px;
    text-decoration: none;
    background-color: whitesmoke;
    color: grey;
    font-size: 16px;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    margin-left: auto;
    margin-right: auto;
    width: 200px; /* Adjust the width as needed */
  }

  .form-container a:hover {
    background-color: red;
    color: white;
  }

  .button {
    display: flex;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    margin-left: auto;
    margin-right: auto;
    width: 200px; /* Adjust the width as needed */
  }

  .button:last-child {
    margin-right: 0;
  }

  .button:hover {
    background-color: red;
    color: white;
  }

  @media (max-width: 767px) {
    /* Add styles for smaller screens here */
    .form-container a,
    .button {
      width: 100%; /* Make the elements full-width on small screens */
    }
  }
</style>









</style>


<br><br><br><br>

<div class="form-container">
    <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "totalcongregation.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">CHRISTIAN COMMUNITY</a>
<br>



  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "full_member.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">FULL MEMBERS</a>
<br>






  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "junior_member.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">JUNIOR MEMBERS</a>
<br>




  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "catechumens1.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">CATECHUMENS</a>
<br>





  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "adherent1.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ADHERENT</a>
<br>




  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "0_5.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">0_5 PEOPLES</a>
<br>



  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "6_10.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">6_10 PEOPLES</a>
<br>



  <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "11_18.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">11_18 PEOPLES</a>
<br>







 <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "19_25.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">19_25 PEOPLES</a>
<br>





 <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "26_30.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">26_30 PEOPLES</a>
<br>





 <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "31_40.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">31_40 PEOPLES</a>
<br>




 <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "41_50.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">41_50 PEOPLES</a>
<br>



 <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "51_60.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">51_60 PEOPLES</a>
<br>




 <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';


// Get the church parameter from the URL
if(isset($_GET['church'])){
    $church = $_GET['church'];
} else {
    $church = ''; // Set a default value if the parameter is not present
}

// Get the loginName parameter from the URL
if(isset($_GET['loginName'])){
    $loginName = $_GET['loginName'];
} else {
    $loginName = ''; // Set a default value if the parameter is not present
}

// URL-encode the church and loginName for safe inclusion in the URL
$encodedChurch = urlencode($church);
$encodedLoginName = urlencode($loginName);

// Create a link to the allmembers.php page with the encoded church and loginName
$otherUrl = "above61.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ABOVE_61 PEOPLES</a>
<br>



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
