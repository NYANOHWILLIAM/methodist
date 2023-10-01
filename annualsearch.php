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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Contact</a>
      </li>
    </ul>

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
              <i class="nav-icon fas fa-bars"></i>
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
                       
<!DOCTYPE html>
<html>
<head>
    <title>Search MDF Records</title>
    <style>
      /* Style for the form container */
.login-wrap {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
   border: 5px solid #000;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   height: 20rem;
}

/* Style for form inputs and labels */
.form-control {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border:5rem;
  border-radius: 5px;
  font-size: 16px;
  height: 2rem;
}

label {
  display: block;
  margin-bottom: 5px;
}

/* Style for date inputs */
input[type="date"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

/* Style for the search button */
button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: red;
}
h3{
  text-align: center;
}


  table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .print-hidden {
        display: none;
    }

    .print-button {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .print-button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>


  <?php include 'pages/church.php';?>
    <h3>ANNUAL HARVEST</h3>
    <h3>ALL CONTRIBUTORS</h3>
    <form method="POST" action=" ">
         <div class="login-wrap">
        <input type="text" class="form-control" placeholder="Enter the name of your church" id="church" onBlur="convertToUppercase(this)" name="church" required readonly>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>
        <button type="submit" name="search">Search</button><br>
    </form>

<script>
    // Function to get the church name from the URL and set it in the "church" input field
    function setChurchFromURL() {
        var urlParams = new URLSearchParams(window.location.search);
        var church = urlParams.get('church');

        if (church) {
            document.getElementById('church').value = church;
        }
    }

    // Call the function after the document is fully loaded
    window.addEventListener('load', setChurchFromURL);
</script>





    <br><br><br>




<?php
// Check if the 'church' parameter is set in the URL
if (isset($_GET['church'])) {
    $church = $_GET['church'];

    // Include the connection.php file to establish a database connection
    include 'connection.php';

    // Check if the church exists in the mdf table
    $checkChurchSql = "SELECT COUNT(*) as church_count FROM annual WHERE church = ?";

    if ($stmt = mysqli_prepare($conn, $checkChurchSql)) {
        mysqli_stmt_bind_param($stmt, "s", $church);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $churchCount);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        if ($churchCount > 0) {
            // Church exists in the mdf table, proceed with the query
            if (isset($_POST['search'])) {
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];

                // Use prepared statements for the main query to prevent SQL injection
                $sql = "SELECT * FROM annual WHERE church = ? AND date BETWEEN ? AND ?";
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    mysqli_stmt_bind_param($stmt, "sss", $church, $start_date, $end_date);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) > 0) {
                        // Display the results in an HTML table
                        echo "<table>";
                        echo "<tr><th>ID</th><th>DATE</th><th>FIRST NAME</th><th>MIDDLE NAME</th><th>LAST NAME</th><th>AMOUNT</th><th>RECIPIENT</th></tr>";

                        $totalAmount = 0;

                        while ($row = mysqli_fetch_assoc($result)) {
                            // Format the date
                            $formattedDate = date("d/m/Y", strtotime($row['date']));
                            echo "<tr>";
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$formattedDate}</td>";
                            echo "<td>{$row['firstname']}</td>";
                            echo "<td>{$row['middlename']}</td>";
                            echo "<td>{$row['lastname']}</td>";
                            echo "<td>{$row['amount']}</td>";
                            echo "<td>{$row['loginName']}</td>";
                            echo "</tr>";

                            $totalAmount += $row['amount'];
                        }

                        // Display the total contribution
                        echo "<tr><th colspan='5'>Total Contribution</th><td>{$totalAmount}</td><td class='print-hidden'></td></tr>";
                        echo "</table>";

                        // Define the variables that were causing the warnings
                        $startDate = date("d/m/Y", strtotime($start_date));
                        $endDate = date("d/m/Y", strtotime($end_date));
                        $churchQuery = $church;

                        // Add a print button with the "print-hidden" class to hide it on the printed page
                        echo "<button class='btn btn-primary print-button' onclick='printTable(\"$startDate - $endDate\", \"$churchQuery\")'>Print</button>";

                        mysqli_stmt_close($stmt);
                    } else {
                        echo "No results found.";
                    }
                } else {
                    echo "Error in prepared statement.";
                }
            }
        } else {
            echo "The specified data does not exist in the database.";
        }
    } else {
        echo "Error: An error occurred while checking the church.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>




<script>
    function printTable(selectedFor, church) {
        var tableHeader = '<h1>THE METHODIST CHURCH - GHANA</h1>' +
            '<h2>' + church + '</h2>' +
            '<h1>ANNUAL HARVEST - GENERAL </h1>';

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

<br><br><br><br><br><br>









       
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
