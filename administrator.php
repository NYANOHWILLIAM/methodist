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
  <nav class="main-header navbar navbar-expand navbar-background-color-white navbar-blue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="">
        <a href="index.php" class="nav-link">SIGN OUT</a>
      </li>
    


  </nav>
  <!-- /.navbar -->

<?php include 'pages/sidebarcontainer.php'; ?>

<?php include 'pages/urlupload.php'; ?>





          
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

        <i class="fas fa-star" style="font-size: 14px;"></i>
    back
    </a>
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



<?php

include 'connection.php';


if(isset($_POST['username']) && isset($_POST['password'])) {
  
  $username = mysqli_real_escape_string($conn, $_POST['username']); // escape special characters in the input
  $password = mysqli_real_escape_string($conn, $_POST['password']); // escape special characters in the input
  
  if (empty($username)) {
   echo "<script>
         alert('Enter username.');
       window.location.href = 'administrator.php';
         </script>";
    exit;
  }
  
  if (empty($password)) {
     echo "<script>
         alert('Enter password.');
        window.location.href = 'administrator.php';
         </script>";
    exit;
    exit;
  }
  
  $ret = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $ret);
  $count = mysqli_num_rows($result);
  
  if ($count > 0) {
    $_SESSION['auth'] = true;
    echo "<script>location.href='login.php'</script>";
    exit;
  } else {
    echo "<script>
           alert('Incorrect username or password.');
        window.location.href = 'administrator.php';
         </script>";
    exit;
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>


 <style type="text/css">

  /* Apply some basic styling to the body */
body {
  background-image: url(dist/img/zz.jpg);
  font-family: Arial, sans-serif;
  background-repeat: no-repeat;
  background-size: cover;
  text-align: center;

}

  form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            background-color: pink;
        }

/* Style the navigation bar */
.navbar {
  background-color: #333;
  color: blue;
}

/* Style the navigation links */
.navbar a {
  color: blue;
}

/* Style the login form wrapper */
.wrapper {
  margin-top: 50px;
}

/* Style the login module */
.module-login {
  background-color: blue;
  border: 1px solid #ddd;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style the login form inputs */
.module-login input[type="text"],
.module-login input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Style the login button */
.module-login .btn-primary {
  width: 100%;
  padding: 10px;
  background-color: #333;
  border: none;
  border-radius: 4px;
  color: #fff;
  font-weight: bold;
}

/* Add spacing between the form controls */
.module-login .control-group {
  margin-bottom: 10px;
}

/* Center the form on the page */
.module-login {
  margin: 0 auto;
  text-align: center;
}

/* Add some margin to the error message */
.module-body span {
  margin-bottom: 10px;
}

/* Center the error message */
.module-body {
  text-align: center;
}

/* Add some padding to the form header */
.module-head {
  padding-bottom: 20px;
}

/* Responsive styling for smaller screens */
@media (max-width: 768px) {
  .navbar-inner {
    text-align: center;
  }

  .navbar-inner a {
    float: none;
    display: inline-block;
  }

  .navbar-inverse-collapse {
    text-align: center;
  }

  .nav.pull-right {
    margin-top: 10px;
  }

  .module-login {
    padding: 10px;
  }
}


/* Style to set text color to white */
  .marquee-text {
    color: white;
    font-size: 26px;
  }

   .btn-primary {
    background-color: yellow; /* Default button color */
    color: #fff; /* Default text color */
    transition: background-color 0.3s ease, color 0.3s ease; /* Transition effect for hover */
    border: none; /* Remove button border if needed */
  }

  .btn-primary:hover {
    background-color: red; /* New background color on hover */
    color: #fff; /* New text color on hover */
  }
</style>

<body>
<?php include'pages/church.php';?>
<h1><b>ADMINISTRATOR LOGIN</b></h1>

<form method="post">

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<form action="login.php" method="post"> <!-- Specify the action and method for your form -->
    <label>USERNAME:</label>
    <input type="text" id="username" name="username" placeholder="Enter username"><br><br>

    <label>PASSWORD:</label>
    <input type="password" id="password" name="password" placeholder="Enter password"><br><br>

    <button type="button" id="submit">Login</button><br><br>

    <input type="reset" name="reset" value="Reset">
</form>

<script>
    // Function to parse query parameters from URL
    function getQueryParameter(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    // Function to handle form submission
    function handleSubmit() {
        // Get the values of loginName and church from the URL
        const loginName = getQueryParameter("loginName");
        const church = getQueryParameter("church");

        // Get the values of username and password from the form
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value; // Add this line for password

        // Do something with the values (e.g., send them to a URL)
        // Replace 'YOUR_DESTINATION_URL' with the actual URL where you want to send the data
        const destinationURL = `login.php?loginName=${loginName}&church=${church}&username=${username}`; // Add password to the URL

        // Redirect to the destination URL
        window.location.href = destinationURL;
    }

    // Attach the handleSubmit function to the submit button's click event
    document.getElementById("submit").addEventListener("click", handleSubmit);
</script>
</body>
</html>

</body>
</html>




</form>
</body>
</html>


<?php include 'pages/footer.php';?>

       
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
