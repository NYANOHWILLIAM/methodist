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


?>

<li class="nav-item">
    <a href="roll.php?loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star nav-icon" style="font-size: 14px;"></i>
        back
    </a>
</li><br><br>





  
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
             
     


<?php include 'pages/church.php'; ?>

 <h3>CHAPEL STEWARS</h3>
<style>

  h3{
    text-align: center;
  }
    /* Style for the table */
    /* Default styles for the table */
table {
    width: 60%;
    border-collapse: collapse;
    margin-top: 5px;
    margin-left: auto;
    margin-right: auto; /* Center the table horizontally */
    font-size: 14px;
}

/* Style for table headers */
th {
    background-color: #008CBA;
    color: white;
    padding: 8px;
    text-align: left;
}

/* Style for table cells */
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Alternate row background color */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover effect for table rows */
tr:hover {
    background-color: #ddd;
}

/* Media query for mobile devices */
@media (max-width: 768px) {
    table {
        width: 100%;
    }
}

/* Style for the print button */
button {
    background-color: #008CBA;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-top: 20px;
    margin-bottom: 20px; /* Add margin at the bottom */
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

/* Center the button */
button {
    display: block;
    margin: 0 auto;
}

/* Hover effect for the button */
button:hover {
    background-color: red; /* Change the background color on hover */
}


    /* Media query for mobile devices */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        th, td {
            padding: 6px;
        }
    }
</style>


<br><br><br><br>

<?php
    // Database configuration
    include 'Connection.php';

    // Check if the 'church' query parameter exists in the URL
    if (isset($_GET['church'])) {
        $churchParam = $_GET['church'];

        // Sanitize the input to prevent SQL injection
        $churchParam = mysqli_real_escape_string($conn, $churchParam);

        // Define the membership status to search for
        $membershipStatus = "Chapel_Steward"; // Change to the desired membership status

        // Query to retrieve data for Chapel Stewards in the specified church
        $query = "SELECT firstname, middlename, lastname FROM registration WHERE roll = '$membershipStatus' AND church = '$churchParam'";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
            echo "<table>
                    <thead>
                        <tr>
                            <th>FIRST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>LAST NAME</th>
                        </tr>
                    </thead>
                    <tbody>";

            // Fetch and display the results
            while ($row = mysqli_fetch_assoc($result)) {
                $firstname = $row['firstname'];
                $middlename = $row['middlename'];
                $lastname = $row['lastname'];

                echo "<tr>
                        <td>{$firstname}</td>
                        <td>{$middlename}</td>
                        <td>{$lastname}</td>
                      </tr>";
            }

            echo "</tbody>
                  </table>";

            // Print button
            echo "<button onclick='printTable(\"$churchParam\")'>Print</button>";
        } else {
            // Display an error message if the query fails
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // If 'church' parameter is not provided in the URL
        echo "Please provide a 'church' parameter in the URL.";
    }

    // Close the database connection
    mysqli_close($conn);
?>


    <script>
        function printTable(church) {
            var tableHeader = '<h1>THE METHODIST CHURCH - GHANA</h1>' +
                '<h2>' + church + '</h2>' +
                '<h1>CHAPEL STEWARS</h1>';

            var logo = "<img src='dist/img/logo.png' alt='Logo' style='position:absolute; top:0; right:0; width:80px; height:80px; margin-top:20px; margin-right:50px;'>";
            var printWindow = window.open("", "", "height=800,width=800");
            printWindow.document.write('<html><head><style>@page { size: auto; margin: 0; } body { margin: 0; text-align: center; }</style>');
            printWindow.document.write('<style>table { margin: 0 auto; width: 80%; border-collapse: separate; border-spacing: 0; }' +
                'th { background-color: #008CBA; color: white; }' +
                'td, th { border: 1px solid black; padding: 8px; text-align: center; }' +
                '.print-hidden { display: none; }' +
                '</style></head><body>');

            // Display the church as a subheader
            printWindow.document.write('<p>' + tableHeader + '</p>');
            printWindow.document.write('<p>' + logo + '</p>');

            var table = document.querySelector("table").cloneNode(true);
            var deleteButtons = table.querySelectorAll(".print-hidden");
            for (var i = 0; i < deleteButtons.length; i++) {
                var deleteButtonCell = deleteButtons[i];
                deleteButtonCell.style.display = "none";
            }

            printWindow.document.write(table.outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.onload = function () {
                printWindow.focus();
                printWindow.print();
                printWindow.close();
            };
        }
    </script>
</body>
</html>

<br><br><br><br><br><br>
            
 




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
