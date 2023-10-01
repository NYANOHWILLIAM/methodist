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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class=""></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">SIGN OUT</a>
      </li>
    
      

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
        <i class="" style="font-size: 14px;"></i>
        Dashboard
    </a>
</li><br>





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
  <title>ATTENDANCE</title>
</head>

 <style>
    body {
      font-family: Arial, sans-serif;
      background-color: gainsboro;

    }

    h2 {
      color: #333;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      width:25rem;
      margin: 0 auto;
      border-radius: 5px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      height: 23rem;
      font-size: 12px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    select,
    input[type="date"] {
      width:20rem;
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
         border-radius: 5px;
           box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

       input[type="text"] {
      width: 20rem;
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
         border-radius: 5px;
           box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    input[type="submit"],
    input[type="button"] {
      background-color: #4caf50;
      color: #fff;
      border: 5rem;
      border-radius: 3rem;
      cursor: pointer;
      border-radius: 5px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #f2f2f2;
      margin-left: 150px;
         border-radius: 5px;
           box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .total {
      margin-top: 10px;
      font-weight: bold;
    }

   

H1,H2,H3{
  text-align: CENTER;
}


.button-container {
  text-align: center;
}

.button-container button {
  margin: 10px;
  border: none;
  border-radius: 5px;
  height: 50px;
  width: 200px;
  background-color: gray;
  color: white;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.button-container button a {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 12px;
  background-color: white;
  color: black;
  border: none;
  cursor: pointer;
  width: 150px;
  border-radius: 4px;
  box-shadow: 0 8px 4px rgba(0, 0, 2, 0.3);
}

.button-container button:hover {
  background-color: red;
}


  </style>






<<!DOCTYPE html>
<html>
<head>
    <title>Attendance Report</title>
</head>
<body>
<?php include 'pages/church.php'; ?>

<h3>CHECK FOR ATTENDANCE</h3>

<form method="POST" action="attendselectconnection.php">
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
        <input type="text" name="year" id="year" required><br>

        <label>SECTION:</label>
        <select name="cells" id="cells" required>
            <option value=""></option>
            <option value="CHILDREN_SERVICE">CHILDREN SERVICE</option>
            <option value="MAIN_CONGREGATION">MAIN CONGREGATION</option>
            <option value="NEW_CONVERT">NEW CONVERT</option>
            <option value="FIRST_TIMERS">FIRST TIMERS</option>
            <!-- Add other options here -->
        </select>
        <br>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>
        <br>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>
        <br>

        <?php
        // Check if the keys exist in the $_GET array before using them
        $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $church = isset($_GET['church']) ? $_GET['church'] : '';
        ?>

        <input type="hidden" name="loginName" id="loginName" value="<?php echo htmlspecialchars($loginName); ?>">
        <input type="hidden" name="id" id="id" value="<?php echo htmlspecialchars($id); ?>">
        <input type="submit" value="Submit" id="submit">
    </div>
</form>
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
