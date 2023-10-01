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

// Check if 'id' exists in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Handle the case where 'id' is not in the URL
    $id = ''; // You can set it to a default value or handle the error accordingly
}
?>

<li class="nav-item">
    <a href="attendance.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
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
        <i class="fas fa-star" style="font-size: 14px;"></i>
        view specific record
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






<!DOCTYPE html>
<html>
<head>
    <title>Attendance Report</title>
    <style>
        

 body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
        margin: 0;
        padding: 0;
    }

    h3 {
        text-align: center;
        margin-top: 20px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="date"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 10px;
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

    .button-container {
        text-align: center;
    }

    .button-container button {
        margin: 10px;
        border: none;
        border-radius: 5px;
        height: 50px;
        width: 200px;
        background-color: #333;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .button-container button:hover {
        background-color: #555;
    }

    .button-container button a {
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 12px;
        background-color: #fff;
        color: #000;
        border: none;
        cursor: pointer;
        width: 150px;
        border-radius: 4px;
        box-shadow: 0 8px 4px rgba(0, 0, 2, 0.3);
    }

 table {
        width: 80%;
        border-collapse: collapse;
        margin-bottom: 20px;
        margin-left: 250px;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
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

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    .hide-on-print {
        display: inline-block;
    }

    @media print {
        .hide-on-print {
            display: none;
        }
    }

    h1, h2, h3, h4 {
        text-align: center;
    }

    p {
        text-align: center;
        font-weight: bold;
        font-size: 18px;
    }

    </style>
</head>
<body>
<?php include 'pages/church.php'; ?>

<h3>CHECK FOR ATTENDANCE</h3>

<form method="POST">
    <div class="login-wrap">
        <input type="text" class="form-control" placeholder="Enter the name of your church" id="church"
               onBlur="convertToUppercase(this)" name="church" required readonly>

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
        <input type="text" name="year" id="year" required><br><br>

        <label>SECTION:</label>
        <select name="cells" id="cells" required>
            <option value=""></option>
            <option value="CHILDREN_SERVICE">CHILDREN SERVICE</option>
            <option value="MAIN_CONGREGATION">MAIN CONGREGATION</option>
            <option value="NEW_CONVERT">NEW CONVERT</option>
            <option value="FIRST_TIMERS">FIRST TIMERS</option>
            <option value="SIS_ALICE_ADWOA_OWUSUAA">SIS ALICE ADWOA OWUSUAA</option>
            <option value="BRO_ALBERT_BONSU">BRO.ALBERT BONSU</option>
            <option value="SOFO_MAAME">SOFO MAAME</option>
            <option value="SIS_BEATRICE_MINKAH">SIS BEATRICE MINKAH</option>
            <option value="BRO_GRAHAM">BRO.GRAHAM</option>
            <option value="BRO_COLLINS_A_NYARKO">BRO.COLLINS A. NYARKO</option>
            <option value="SIS_DOROTHY_EFFAH">SIS. DOROTHY EFFAH</option>
            <option value="SINGING_BAND_1">SINGING BAND 1</option>
            <option value="SINGING_BAND_2">SINGING BAND 2</option>
            <option value="CHOIR_1">CHOIR 1</option>
            <option value="CHOIR_2">CHOIR 2</option>
            <option value="BRO_I_K_S_BOAHIN">BRO. I.K.S BOAHIN</option>
            <option value="BRO_T_F_MENSAH">BRO. T. F.MENSAH</option>
            <option value="SIS_JOYCE_KWAKYE">SIS. JOYCE KWAKYE</option>
            <option value="SIS_LOVELACE_AFFUL">SIS. LOVELACE AFFUL</option>
            <option value="BRO_OPOKU_ANTWI">BRO. OPOKU ANTWI</option>
            <option value="BRO_EMMANUEL_ADU">BRO EMMANUEL ADU</option>
            <option value="YOUTH_CLASS">YOUTH CLASS</option>
        </select>
        <br><br>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>
        <br><br>
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>
        <br><br>
        <input type="submit" value="Submit">
    </div>
</form><br><br><br><br><br>

<?php
// Database configuration
include 'connection.php';

// Initialize variables
$selectedFor = "";
$year = "";
$church = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle record deletion
    if (isset($_POST['delete'])) {
        // ... (your existing delete code)
    }

    // Validate and sanitize form data
    if (isset($_POST['cells'])) {
        $selectedFor = mysqli_real_escape_string($conn, $_POST['cells']);
    }

    if (isset($_POST['year'])) {
        $year = mysqli_real_escape_string($conn, $_POST['year']);
    }

    if (isset($_POST['church'])) {
        $church = mysqli_real_escape_string($conn, $_POST['church']);
    }

    // Validate year format (assuming YYYY)
    if (!preg_match("/^\d{4}$/", $year)) {
        die("Invalid year format. Please enter a valid year (YYYY).");
    }

    // Create the header based on the selected parameters
    $header = '<h1>THE METHODIST CHURCH OF GHANA</h1><h2>ATTENDANCE REPORT</h2><h3>' . htmlspecialchars($selectedFor) . ($year ? ' - Year ' . htmlspecialchars($year) : '') . '</h3>' . ($church ? '<h4>Church: ' . htmlspecialchars($church) . '</h4>' : '');

    // Prepare and execute the SQL query based on the selected type, year, and church
    $sql = "SELECT * FROM attend WHERE
            `church` = '$church'
            AND `cells` = '$selectedFor'
            AND YEAR(date) = '$year'";
    $result = mysqli_query($conn, $sql);

    // Display results in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>DATE</th><th>CELLS</th><th>MALE</th><th>FEMALE</th><th>STEWARD</th><th>CHURCH</th></tr>";

        $total_contribution = 0;
        $total_number = 0;
        $total_number1 = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["cells"] . "</td>";
            echo "<td>" . $row["number"] . "</td>";
            echo "<td>" . $row["number1"] . "</td>";
            echo "<td>" . $row["loginName"] . "</td>";
            echo "<td>" . $row["church"] . "</td>";
            echo "<td class='print-hidden'>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
            echo "<button class='btn btn-danger' type='submit' name='delete'>Delete</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";

            // Calculate totals
            $total_contribution += $row["number"] + $row["number1"];
            $total_number += $row["number"];
            $total_number1 += $row["number1"];
        }
        echo "</table>";

        // Display the totals
        echo "<table>";
        echo "<tr><th colspan='2'>Total MALE</th><td>" . $total_number . "</td><td colspan='3'></td></tr>";
        echo "<tr><th colspan='2'>Total FEMALE</th><td>" . $total_number1 . "</td><td colspan='3'></td></tr>";
        echo "<tr><th colspan='2'>Total NO. ATTENDANCE</th><td>" . $total_contribution . "</td><td colspan='3'></td></tr>";
        echo "</table>";

         // Add print button with the modified header
        echo "<br><button class='btn btn-primary hide-on-print' onclick='printTable(\"" . htmlspecialchars($selectedFor) . "\", \"" . htmlspecialchars($year) . "\", \"" . htmlspecialchars($church) . "\", \"" . htmlspecialchars($header) . "\")'>Print</button>";
    } else {
        echo "<p>No results found.</p>";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
</head>
<body>
<script>
    function printTable(selectedFor, year, church, header) {
        // Provide default values for year and church if they are undefined
        year = year || 'N/A';
        church = church || 'N/A';

        // Define the content to be printed
        var tableHeader = '<h1>THE METHODIST CHURCH OF GHANA</h1><h2>ATTENDANCE REPORT</h2><h3>' + selectedFor + ' - Year ' + year + '</h3><h4>Church: ' + church + '</h4>';
        var logo = "<img src='dist/img/logo.png' alt='Logo' style='position:absolute; top:0; right:0; width:80px; height:80px; margin-top:20px; margin-right:50px;'>";
        var printWindow = window.open("", "", "height=800,width=800");
        printWindow.document.write('<style>@page { size: auto;margin: 0; } body { margin: 0; text-align: center; }</style>');
        printWindow.document.write('<style>table {margin: 0 auto; width: 80%; border-collapse: separate; border-spacing: 0;}' +
            'th {background-color: #008CBA; color: white;}' +
            'td, th {border: 1px solid black; padding: 8px; text-align: center;}' +
            '.print-hidden {display: none;}' +
            '.hide-on-print {display: none;}' +
            '@media print { .hide-on-print {display: none;} }' +
            '</style>');
        printWindow.document.write(tableHeader + logo);
        var table = document.querySelector("table").cloneNode(true);
        printWindow.document.write(table.outerHTML);
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
