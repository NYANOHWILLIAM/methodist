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
    <a href="attendselect.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-trash nav-icon" style="font-size: 14px;"></i>
        DELETE / EDIT / PRINT
    </a>
</li><br>



                 
           
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






<style>
    /* Apply your CSS styles here */

body{
  background-color: gray;
}


/* Overall container styling */
.form-container {
  border: 1px solid black;
  padding: 10px;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  max-width: 600px;
  margin: 0 auto;
  background-color: whitesmoke;
  /* Add height here */
  height: 480px; /* You can adjust the height to your preference */
  font-size: 1rem;
}

/* Heading style */
h2 {
  text-align: center;
  color: #333;
}

/* Form label style */
label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: ;
}

/* Input and select box styling */
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;

}

/* Submit button styling */
input[type="submit"] {
background-color: red;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Submit button hover effect */
input[type="submit"]:hover {
 background-color: green;
}

/* Error message style */
span.error {
  color: red;
}

/* Clearfix to fix float issues */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

  </style>
</head>

<body>

<?php include 'pages/church.php';?>
  <h2>ATTENDANCE</h2>

  <div class="form-container" style="border: 1px solid black; padding: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
    <form method="POST">

   <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Enter the name of your church" id="church" onBlur="convertToUppercase(this)" name="church" required readonly>

            <script>
                function convertToUppercase(input) {
                    input.value = input.value.toUpperCase();
                }
            </script>



<script>
    // Function to get the church name from the URL and set it in the "church" input field
    function setChurchFromURL() {
        var urlParams = new URLSearchParams(window.location.search);
        var church = urlParams.get('church');

        if (church) {
            document.getElementById('church').value = church;
        }
    }

    // Call the function on page load
    window.addEventListener('load', setChurchFromURL);
</script>

      <label for="year">YEAR:</label>
      <input type="number" name="year" id="year" placeholder="YYYY" required min="1900" max="2099">

      <label for="cells">CHECK ROLL :</label>
      <select name="cells" id="cells" required>
        <option value=""></option>
        <option value="CHILDREN_SERVICE">CHILDREN SERVICE</option>
        <option value="MAIN_CONGREGATION">MAIN CONGREGATION</option>
        <option value="NEW_CONVERT">NEW CONVERT</option><br>
        <option value="FIRST_TIMERS">FIRST TIMERS</option>
       
      </select><br>
      <div>
        <label for="number">MALE:</label>
        <input type="number" name="number" id="number" placeholder="Enter the number here">

        <label for="number1">FEMALE:</label>
        <input type="number" name="number1" id="number1" placeholder="Enter the number here">

        <?php if (isset($_POST['submit']) && (empty($amount) || !preg_match('/^\d+(\.\d{2})?$/', $amount))) { ?>
          <span style="color: red;"></span>
        <?php } ?>
      </div>

      <div>
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>






  </div>
<br><br><br><br><br><br><br><br>

<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $number = $_POST['number'];
  $number1 = $_POST['number1'];
  $cells = $_POST['cells'];
  $church = $_POST['church'];
  $year = $_POST['year'];
  $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';

  // Validate the form data
  if (empty($number) || empty($number1)) {
    echo "<script>alert('Please fill in both number fields')</script>";
  } elseif (!is_numeric($number) || $number <= 0 || !is_numeric($number1) || $number1 <= 0) {
    echo "<script>alert('Please enter positive numbers.')</script>";
  } else {
    // Include the database connection
    include 'connection.php';

    // Prepare the SQL query with placeholders
    $sql = "INSERT INTO attend (number, number1, loginName, year, cells, church) VALUES (?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ddssss", $number, $number1, $loginName, $year, $cells, $church);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
      echo "<script>alert('Record added successfully')</script>";
    } else {
      echo "<script>alert('Error adding record: " . mysqli_error($conn) . "')</script>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);
  }
}
?>

</body>
</html>





   

       
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
