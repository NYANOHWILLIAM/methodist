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
            <ul class="nav nav-treeview"><br><br>


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
    <a href="departments.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
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
    <a href="daily.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        daily report
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
    <a href="weekly.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        weekly report
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
    <a href="monthly.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        monthly report
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
    <a href="yearly.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        yearly report
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Title</title>
    <style>
    /* Reset some default styles */
/* Reset some default styles */
body, h1, h2, p {
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Style for the boxes */
.box {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 20px;
    margin: 10px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Style for the total boxes */
.total-box {
    text-align: center;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    margin: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Style for headings */
h2 {
    color: #333;
}

/* Style for the church name */
h5 {
    font-size: 18px;
}

/* Style for the overall balance */
.overall-balance {
    font-size: 24px;
    color: red; /* Initial color */
    animation: blink 1s infinite; /* Blinking animation */
}

/* Keyframes for blinking animation */
@keyframes blink {
    0%, 00% {
        color: red;
    }
    0% {
        color: transparent;
    }
}

/* Responsive styles for mobile devices */
@media (max-width: 768px) {
    /* Adjust box styling for smaller screens */
    .box {
        padding: 10px;
        margin: 5px;
    }

    /* Center align the total boxes */
    .total-box {
        text-align: center;
    }

    /* Decrease font size for headings */
    h2 {
        font-size: 24px;
    }

    /* Decrease font size for church name */
    h5 {
        font-size: 16px;
    }

    /* Decrease font size for overall balance */
    .overall-balance {
        font-size: 18px;
    }
}


/* Add this CSS rule to make the text "ACC. BALANCE" blink red */
.blink-text {
    color: red; /* Initial color */
    animation: blink 2s infinite; /* Blinking animation */
}

    </style>
</head>
<body>
    <header>
    
            


<?php include 'pages/church.php'; ?>
        <h2>BANK</h2>
    </header>

    <div class="container">
<!DOCTYPE html>
<html>
<head>
    <title>Church Financial Report</title>
    <style>
        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }

        .total-box {
            text-align: center;
        }

        .blink-text {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .overall-balance {
            font-size: 24px;
            font-weight: bold;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
// Database configuration
include 'connection.php';

// Get the church name from the URL
if (isset($_GET['church'])) {
    $churchName = $_GET['church'];

    // Initialize the total amount variables
    $totalAmount = 0;
    $totalExpenditure = 0;

    // Function to display a box with the given title and total amount
    function displayBox($title, $total) {
        echo "<div class='box'>";
        echo "<h2>$title</h2>";
        echo "<p>Total: ₵" . number_format($total, 2) . "</p>";
        echo "</div>";
    }

    // Query to retrieve the total amount contributed from the "mdf" table for the specified church
    $query = "SELECT SUM(amount) AS total_amount FROM mdf WHERE church = '$churchName'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mdfTotal = $row['total_amount'];
        displayBox("MDF", $mdfTotal);
        $totalAmount += $mdfTotal;
    } else {
        echo "No MDF contributions found for $churchName.";
    }

    // Query to retrieve the total amount contributed from the "money" table for the specified church
    $query = "SELECT SUM(amount) AS total_amount FROM money WHERE church = '$churchName'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $moneyTotal = $row['total_amount'];
        displayBox("TITHE", $moneyTotal);
        $totalAmount += $moneyTotal;
    } else {
        echo "No tithe contributions found for $churchName.";
    }

    // Query to retrieve the total amount contributed from the "annual" table for the specified church
    $query = "SELECT SUM(amount) AS total_amount FROM annual WHERE church = '$churchName'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $annualTotal = $row['total_amount'];
        displayBox("HARVEST", $annualTotal);
        $totalAmount += $annualTotal;
    } else {
        echo "No annual harvest contributions found for $churchName.";
    }

    // Query to retrieve the total amount contributed from the "collection" table for the specified church
    $query = "SELECT SUM(amount) AS total_amount FROM collection WHERE church = '$churchName'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $collectionTotal = $row['total_amount'];
        displayBox("OFFERTORY", $collectionTotal);
        $totalAmount += $collectionTotal;
    } else {
        echo "No offertory contributions found for $churchName.";
    }

    // Query to retrieve the total amount contributed from the "expenditure" table for the specified church
    $query = "SELECT SUM(amount) AS total_amount FROM expenditure WHERE church = '$churchName'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $expenditureTotal = $row['total_amount'];
        displayBox("EXPENSES", $expenditureTotal);
        $totalExpenditure = $expenditureTotal;
    } else {
        echo "No expenditure found for $churchName.";
    }

    // Calculate the overall total amount
    $overallTotal = $totalAmount - $totalExpenditure;

    // Close the database connection
    mysqli_close($conn);

    // Display the overall total and remaining balance
    echo "<div class='total-box OVERALL'>";
    echo "<h5>OVERALL TOTAL</h5>";
    echo "<p>₵" . number_format($totalAmount, 2) . "</p>";
    echo "</div>";
    echo "<div class='total-box remaining-balance'>";
    echo "<h2>TOTAL AMOUNT - EXPENSES MADE</h2>";
    echo "<h1>ACCOUNT BALANCE</h1>";
    echo "<p><span class='overall-balance'>" . number_format($overallTotal, 2) . "</span></p>";
    echo "</div>";
} else {
    // If the church name is not provided in the URL, display an error message.
    echo "Church name not provided in the URL.";
}
?>
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
