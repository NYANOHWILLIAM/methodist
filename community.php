<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

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
  <nav class="main-header navbar navbar-expand navbar-blue navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>








<style>
  /* Add margin to create horizontal spacing */
  .code-block {
    margin-right: 20px; /* Adjust the value as needed */
  }

  /* Add hover effect and background color */
  .code-block:hover {
    background-color:red; /* Change to your desired background color */
    color: white;
  }
</style>

<!-- First Code Block -->
<div class="code-block">
  <?php
  // Check if 'loginName' and 'church' exist in the URL
  if (isset($_GET['loginName']) && isset($_GET['church'])) {
      $loginName = $_GET['loginName'];
      $church = $_GET['church'];
  } else {
      // Handle the case where 'loginName' or 'church' is not in the URL
      $loginName = ''; // You can set it to a default value or handle the error accordingly
      $church = '';
  }
  ?>
  <li class="nav-item">
      <a href="search.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
          <i class="........." style="font-size: 14px;"></i>
          SEARCH
      </a>
  </li>
</div>







<!-- Add more code blocks as needed with the same class "code-block" -->



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





    


      
                 
   <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Your other navigation items go here -->
    
    <!-- Sign Out Link -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link" style="color: red;">
                <i class=""></i> SIGN OUT
            </a>
        </li>
    </ul>
</nav>


  </nav>
  <!-- /.navbar -->

<?php include 'pages/sidebarcontainer.php'; ?>
<?php include 'pages/urlupload.php';?>





      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
               <i class="fas fa-bars"></i>           
               <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

        <?php include 'pages/signout.php'; ?><br>

<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="departments.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
      back
    </a>
</li><br> 






<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="gender.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
      GENDER
    </a>
</li><br> 



<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="membership.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
        MEMBERSHIP
    </a>
</li><br> 



<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="roll.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
        ROLL
    </a>
</li><br> 

    
<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>
<li class="nav-item">
    <a href="maritalstatus.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
       MARITAL STATUS
    </a>
</li><br> 
                 
          
<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="employment.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
        EMPLOYMENTS
    </a>
</li><br>



          
<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="organization.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
        ORGANIZATIONS
    </a>
</li><br>


          
<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="visitors_information1.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
        VISITORS
    </a>
</li><br>




<?php
// Check if 'loginName' and 'church' exist in the URL
if (isset($_GET['loginName']) && isset($_GET['church'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
} else {
    // Handle the case where 'loginName' or 'church' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
}
?>

<li class="nav-item">
    <a href="fetch1.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="" style="font-size: 14px;"></i>
        CLASS LEADERS & THEIR MEMBERS
    </a>
</li>
















</li><br><br>

                 
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

















             
                 
           
 <script>
        // Disable browser back and forward controls
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>



 <style>

    body{
        background-image: url(dist/img/dd.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* Custom CSS styles */

    /* Style the image container */
    .image-container {
      text-align: center;
      margin-top: 20px;
    }

    .image-container img {
      width: 100%;
      height: auto;
      border: 5px solid #007bff; /* Add a border around the image */
      border-radius: 10px; /* Add some border-radius for a rounded appearance */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
      background-size: cover;
    }

    /* Style the marquee */
  /* Apply margin-left to the container of the image, not the image itself */
.image-container {
  margin-left: 80px;
  /* You may want to add padding or other styles to the container as well */
  font-size: 12px;
}

  </style>




</head>
<body>
   

    <div class="header">
        <h1></h1>
    </div>

 






  <!DOCTYPE html>
<html>
<head>
  <title>Carousel Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<?php include 'pages/church.php'; ?>
<body>



  <div class="image-container">
 
</div>



        

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'pages/footer.php'?>;
  

            </div>
        </div>
    </footer>
</div>
</body>
</html>















       
    </section>
    <!-- /.content -->
  </div>





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
