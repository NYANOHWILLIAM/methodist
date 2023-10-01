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
              <i class="nav-icon fas fa-menu"></i>
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
    <a href="bank.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName); ?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        back
    </a>
</li><br>      
              


           
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
    <title>Weekly Report</title>

    <style>
        h1, h2 {
            text-align: center;
        }

  
        
    </style>
</head>
<body>
  
   <?php include 'pages/church.php';?>
    <h2>DAILY REPORT</h2>

<?php
// Define database connection variables
include 'connection.php';

// Assuming you have already established a database connection named $conn

// Check if the "church" parameter is present in the URL
if (isset($_GET['church'])) {
    $churchFromURL = $_GET['church'];

    // Sanitize the input to prevent SQL injection (use mysqli_real_escape_string or prepared statements)
    $churchFromURL = mysqli_real_escape_string($conn, $churchFromURL);

    // Define an array of tables and their corresponding SQL queries
    $tableData = array(
        'mdf' => array(
            'table_name' => 'METHODIST DEVELOPMENT FUND',
            'sql' => "SELECT DATE(`date`) AS day, SUM(amount) AS total_amount 
                        FROM mdf 
                        WHERE church = '$churchFromURL' 
                        GROUP BY day 
                        ORDER BY day DESC"
        ),
        'money' => array(
            'table_name' => 'TITHE',
            'sql' => "SELECT DATE(`date`) AS day, SUM(amount) AS total_amount 
                      FROM money 
                      WHERE church = '$churchFromURL' 
                      GROUP BY day 
                      ORDER BY day DESC"
        ),
        'collection' => array(
            'table_name' => 'OFFERTORY',
            'sql' => "SELECT DATE(`date`) AS day, SUM(amount) AS total_amount 
                        FROM collection 
                        WHERE church = '$churchFromURL' 
                        GROUP BY day 
                        ORDER BY day DESC"
        )
    );

    // Iterate through the tables and execute the corresponding queries
    foreach ($tableData as $tableName => $data) {
        $sql = $data['sql'];
        $tableDisplayName = $data['table_name'];

        $result = mysqli_query($conn, $sql);

        // Check for errors
        if (!$result) {
            die("Error in SQL query for $tableName: " . mysqli_error($conn));
        }

        // Check if any records were found
        if (mysqli_num_rows($result) > 0) {
            // Display the table header with the translated table name
            echo "<h2>$tableDisplayName</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Date</th><th>Total Amount</th></tr>";

            // Display the results in a table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['day'] . "</td>";
                echo "<td>" . $row['total_amount'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No records found for the $tableDisplayName table.</p>";
        }
    }
} else {
    echo "Church parameter is missing in the URL.";
}
?>
<div class="center-container" style="margin-left: 0px;">
    <div id="tableHeader"></div>
    <div style="margin-top: 20px;"></div> <!-- Add space here -->
    <select id="for" onchange="updateTableHeader()">
        <option value="mdf">METHODIST DEVELOPMENT FUND</option>
        <option value="money">TITHE</option>
        <option value="collection">OFFERTORY</option>
        <!-- Add more options as needed -->
    </select>
    <br><br>
    <button onclick="printTable()">Print</button>
</div>

<script>
function printTable() {
    var selectedOption = document.getElementById('for').value;
    var church = "<?= $churchFromURL; ?>"; // Use the correct variable name

    // Define an object to map the selected option to its corresponding display name
    var tableDisplayNames = {
        'mdf': 'METHODIST DEVELOPMENT FUND',
        'money': 'TITHE',
        'collection': 'OFFERTORY'
        // Add more options as needed
    };

    var tableDisplayName = tableDisplayNames[selectedOption] || '';

    var header = '<h1>THE METHODIST CHURCH OF GHANA</h1>' +
                 '<h2> ' + church + '</h2>' +
                 '<h3>' + tableDisplayName.toUpperCase() + ' REPORT</h3>';
               
    var logo = "<img src='dist/img/logo.png' alt='Logo' style='position:absolute; top:0; right:0; width:80px; height:80px; margin-top:20px; margin-right:50px;'>";
    
    var printWindow = window.open("", "", "height=800,width=800");
    
    printWindow.document.write(
        '<style>@page { size: auto; margin: 0; } body { margin: 0; text-align: center; }</style>'
    );
    
    printWindow.document.write(
        '<style>table {margin: 0 auto; width: 80%; border-collapse: separate; border-spacing: 0;}' +
        'th {background-color: #008CBA; color: white;}' +
        'td, th {border: 1px solid black; padding: 8px; text-align: center;}' +
        '.print-hidden {display: none;}' +
        '@media print {.print-hidden {display: none;}}' +
        '</style>'
    );

    // Include table headers in the print view
    printWindow.document.write(header + logo);
    var tableToPrint = document.querySelector("table");
    printWindow.document.write(tableToPrint.outerHTML);
    printWindow.document.close();
    
    printWindow.onload = function() {
        printWindow.focus();
        printWindow.print();
        printWindow.close();
    };
}
</script>



<br><br><br><br><br>

<style>
   /* Add styles to expand the navigation bar */
.navbar {
    background-color: #008CBA; /* Set the background color */
    padding: 10px; /* Add padding to the top and bottom */
    display: flex; /* Use flexbox for layout */
    justify-content: space-between; /* Push elements to the sides */
    align-items: center; /* Vertically center items */
}

.navbar a {
    color: white; /* Set the link color to white */
    text-decoration: none; /* Remove underlines from links */
    margin: 0 10px; /* Add margin to create space between links */
}

/* Center your table */
table {
    width: 100%; /* Make the table width 100% for mobile responsiveness */
    max-width: 600px; /* Set a maximum width for larger screens */
    border-collapse: collapse; /* Combine adjacent borders into a single border */
    margin: 20px auto; /* Center the table horizontally and add space at the top */
}

th {
    background-color: #008CBA;
    color: white;
}

td, th {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}
body{
    text-align: center;
}
</style><br><br>



   
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
