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













<!-- Second Code Block -->
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
      <a href="registration.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
          <i class=" " style="font-size: 14px;"></i>
          REGISTRATION
      </a>
  </li>
</div>

<!-- Add more code blocks as needed with the same class "code-block" -->














<!-- Third Code Block -->
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
      <style>
        .nav-item a {
            text-decoration: none; /* Remove underline */
            color:white; /* Inherit text color */
        }
      </style>
      <a href="admin.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
          <i class="........." style="font-size: 14px;"></i>
          WELFARE
      </a>
  </li>
</div>

      
                 
   <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>




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
    <a href="birthday.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-users" style="font-size: 14px;"></i>
      BIRTHDAY
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
    <a href="enrolment_display.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-users" style="font-size: 14px;"></i>
      ENROLMENT
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
    <a href="community.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-users" style="font-size: 14px;"></i>
        CHRISTIAN COMMUNITY
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
    <a href="expenditure.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-dollar-sign nav-icon" style="font-size: 14px;"></i>
        EXPENDITURE
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
    <a href="attendance.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-users nav-icon" style="font-size: 14px;"></i>
        ATTENDANCE
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
    <a href="bank.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-university nav-icon" style="font-size: 14px;"></i>
        BANK
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
    <a href="sms.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-comment nav-icon" style="font-size: 14px;"></i>
        SMS
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
    <a href="administrator.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-lock" style="font-size: 14px;"></i>
        ADMINISTRATOR
    </a>
</li>









      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                PAYMENTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

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
    <a href="mdf1.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-dollar-sign nav-icon" style="font-size: 14px;"></i>
        MDF
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
    <a href="tithe1.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-hand-holding-usd nav-icon" style="font-size: 14px;"></i>
        TITHE
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
    <a href="annual1.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-users nav-icon" style="font-size: 14px;"></i>
        ANNUAL HARVEST
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
    <a href="offertory1.php?loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-hand-holding nav-icon" style="font-size: 14px;"></i>
        OFFERTORY
  </li><br>




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
        body {
            background-image: url('dist/img/IMG-20230430-WA0001.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            color: red;
        }

        /* Custom CSS styles */

        /* Style the image container */
        .image-container {
            text-align: center;
            margin-top: 20px;
            margin-left: 80px;
            /* You may want to add padding or other styles to the container as well */
        }

        .image-container img {
            width: 100%;
            border: 5px solid #007bff; /* Add a border around the image */
            border-radius: 10px; /* Add some border-radius for a rounded appearance */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
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


<style>
    /* Style for the notification */
    .notification {
        background-color: red; /* Blue color for the background */
        color: #fff; /* White text color */
        padding: 10px;
        margin-bottom: 10px;
        text-align: center;
    }

    /* Style for the birthday messages */
    .birthday-message {
        border: 1px solid #ccc; /* Gray border */
        padding: 10px;
        margin-bottom: 10px;
        text-align: center;
        background-color: yellow;

    }
</style>




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
