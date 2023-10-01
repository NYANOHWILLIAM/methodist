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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
             
                 
           
<?php
include 'connection.php';

session_start();

if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Ensure the connection was successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Select the database
    if (!mysqli_select_db($conn, "methodist")) {
        die("Database not found");
    }

    if (empty($name) || empty($password)) {
        echo "<script>
             alert('Please enter both username and password.');
             window.location.href = 'admin.php';
             </script>";
        exit;
    }

    $name = mysqli_real_escape_string($conn, $name);
    $password = mysqli_real_escape_string($conn, $password);

    // Query for stewards table
    $stewardsQuery = "SELECT * FROM stewards WHERE name='$name' AND password='$password'";
    $stewardsResult = mysqli_query($conn, $stewardsQuery);
    $stewardsCount = mysqli_num_rows($stewardsResult);

    // Query for welfareexecutive table
    $welfareQuery = "SELECT * FROM welfareexecutive WHERE name='$name' AND password='$password'";
    $welfareResult = mysqli_query($conn, $welfareQuery);
    $welfareCount = mysqli_num_rows($welfareResult);

    if ($stewardsCount > 0) {
        $_SESSION['auth'] = true;

        // Retrieve the name and church from the database
        $row = mysqli_fetch_assoc($stewardsResult);
        $nameFromDB = $row['name'];
        $churchFromDB = $row['church']; // Assuming 'church' is the column name

        // Redirect to departments.php with loginName and church parameters
        redirectToDepartments($nameFromDB, $churchFromDB);
    } elseif ($welfareCount > 0) {
        $_SESSION['auth'] = true;

        // Retrieve the name and church from the database
        $row = mysqli_fetch_assoc($welfareResult);
        $nameFromDB = $row['name'];
        $churchFromDB = $row['church']; // Assuming 'church' is the column name

        // Redirect to welfare1.php with loginName and church parameters
        redirectToWelfare($nameFromDB, $churchFromDB);
    } else {
        // Invalid username and password
        redirectToAdmin("Incorrect username and password.");
    }
}

// Function to redirect to departments.php
function redirectToDepartments($name, $church) {
    $url = "departments.php?loginName=" . urlencode($name) . "&church=" . urlencode($church);
    header("Location: $url");
    exit;
}

// Function to redirect to welfare1.php
function redirectToWelfare($name, $church) {
    $url = "welfare1.php?loginName=" . urlencode($name) . "&church=" . urlencode($church);
    header("Location: $url");
    exit;
}

// Function to redirect to admin.php with an optional message
function redirectToAdmin($message = null) {
    if ($message) {
        echo "<script>
             alert('$message');
             window.location.href = 'admin.php';
             </script>";
    } else {
        header("Location: admin.php");
    }
    exit;
}
?>




<?php
// Database connection configuration
include 'connection.php';


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input and prevent SQL injection
function sanitizeInput($input) {
    return mysqli_real_escape_string($GLOBALS['connection'], $input);
}



// Close the database connection
$conn->close();
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMS | Admin login</title>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>


<style type="text/css">

  /* Apply some basic styling to the body */
body {
  background-image: url(dist/img/kk.jpg);
  font-family: Arial, sans-serif;
  background-repeat: no-repeat;
  background-size: cover;

}

/* Style the navigation bar */
.navbar {
  background-color:;
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


  <marquee behavior="scroll" direction="left" class="marquee-text">
    THE METHODIST CHURCH GHANA .... login as a welfare officer or Steward
  </marquee>

<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i>
        </a>
        <div class="nav-collapse collapse navbar-inverse-collapse">
          <ul class="nav pull-right">
            <!-- Add your navigation links here -->
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="module module-login span4 offset4">
          <form method="post" action="admin.php">
            <div class="module-head">
           
            </div>
            <span style="color:red;"></span>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="text" id="name" name="name" placeholder="Username"></input><br><br>
                </div>
              </div>
              <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="password" id="inputPassword" name="password" placeholder="Password"></input><br>
                </div>
              </div>
            </div>
            <div class="module-foot">
              <div class="control-group">
                <div class="controls clearfix">
                  <button type="submit" class="btn btn-primary pull-right">Login</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
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
