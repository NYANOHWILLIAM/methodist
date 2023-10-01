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


 <?php include 'pages/church.php'; ?>



    <div class="left-corner-menu">
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
            <a href="community.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
                <i class="fa fa-gender" style="font-size: 14px;"></i>
                BACK
            </a>
        </li>
        <!-- Add more menu items here if needed -->
    </div>


<style type="text/css">
  
 /* Add CSS styles here */
        .left-corner-menu {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
            background-color: #333; /* Background color for the menu */
        }

        .left-corner-menu .nav-item {
            margin-bottom: 10px;
        }

        .left-corner-menu .nav-item a {
            text-decoration: none;
            color: #fff; /* Text color for menu items */
            display: flex;
            align-items: center;
            transition: color 0.3s; /* Add a smooth color transition on hover */
        }

        .left-corner-menu .nav-item a:hover {
            color: white; /* Change text color on hover */
            background-color: red;
        }

        .left-corner-menu .nav-item a i {
            margin-right: 5px;
            font-size: 14px;
        }


</style>









<br><br>


 <h3>GENDER SECTIONS</h3>

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
$otherUrl = "allmembers.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ALL MEMBERS WITH THEIR AGE</a>
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
$otherUrl = "onlymale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ONLY MALES</a>
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
$otherUrl = "onlyfemale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ONLY FEMALES</a>
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
$otherUrl = "onlychildren.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">CHILDREN SERVICE</a>
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
$otherUrl = "onlychildrenmale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">CHILDREN SERVICE (MALE)</a>
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
$otherUrl = "onlychildrenfemale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">CHILDREN SERVICE (FEMALES)</a>
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
$otherUrl = "onlyteen.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">TEEN SERVICE</a>
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
$otherUrl = "onlyteenmale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">TEEN SERVICE (MALE)</a>
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
$otherUrl = "onlyteenfemale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">TEEN SERVICE (FEMALE)</a>
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
$otherUrl = "onlyadult.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ADULTS</a>
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
$otherUrl = "onlyadultmale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ADULTS (MALES)</a>
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
$otherUrl = "onlyadultfemale.php?church=$encodedChurch&loginName=$encodedLoginName";
?>

<!-- Output the link to the other URL (allmembers.php) -->
<a class='form-link' href="<?php echo $otherUrl; ?>">ADULTS (FEMALES)</a>
<br>

</div>
<br><br><br><br><br>









       
    </section>
    <!-- /.content -->
  </div>


<?Php include 'pages/footer.php';?>

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
