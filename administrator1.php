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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-sign-in-alt"></i></a>
      </li>
      <li class="">
        <a href="index.php" class="nav-link">SIGN OUT</a>
      </li>
    


  </nav>
  <!-- /.navbar -->

<?php include 'pages/sidebarcontainer.php'; ?>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/qq.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">NYANOH IT</a>
        </div>
      </div>


                 
           
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
       window.location.href = 'administrator1.php';
         </script>";
    exit;
  }
  
  if (empty($password)) {
     echo "<script>
         alert('Enter password.');
        window.location.href = 'administrator1.php';
         </script>";
    exit;
    exit;
  }
  
  $ret = "SELECT * FROM administrator WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $ret);
  $count = mysqli_num_rows($result);
  
  if ($count > 0) {
    $_SESSION['auth'] = true;
    echo "<script>location.href='login1.php'</script>";
    exit;
  } else {
    echo "<script>
           alert('Incorrect username or password.');
        window.location.href = 'administrator1.php';
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
    
  body {

      text-align: center;
      background-repeat: no-repeat;
      width: 100%;

    }
  
  form {
   
    margin-top: 5%;
    margin-left: 500px;
    box-shadow: 0 0 10px #ccc;
    border-radius: 1rem;
    width: 500px;
    text-align: CENTER;
    padding: 30px;
    position: absolute;
    height: 280px;
    background-image: url("dist/img/logo.png");
    background-color: whitesmoke;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50%;
    overflow: ;
  }

   input[type="text"]{
      
      margin: 5px;
      border-radius: 20px;
      width: 310px;
      height: 30px;
      text-align: center;
      font-size: 15px;
      border-radius: 3rem;
   }

    input[type="password"]{
      
      margin: 5px;
      border-radius: 20px;
      width: 310px;
      height: 30px;
      text-align: center;
      font-size: 15px;
      border-radius: 3rem;
   }









  </style>



  
       
<form method="post">

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>


</head>



<body>
 <form action="login.php" method="post"> <!-- Specify the action and method for your form -->

        <label for="username">USERNAME:</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required><br><br>

        <label for="password">PASSWORD:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required><br><br>

        <button type="submit" id="submit">Login</button><br>

        <input type="reset" name="reset" value="Reset">
    </form>
 
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
