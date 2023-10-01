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
    <a href="departments.php?loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star nav-icon" style="font-size: 14px;"></i>
        back
    </a>
</li><br><br>





  
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
     
<style>
  h1, h2 {
    text-align: center;
  }

  body {
    background-color: floralwhite;
  }



  /* Style for the form container */
  #message-form {
    width: 100%;
    max-width: 400px; /* Set a maximum width for larger screens */
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }

  /* Style for the checkboxes */
  input[type="checkbox"] {
    margin-right: 10px;
  }

  /* Style for the "Select All" label */
  label[for="selectAll"] {
    font-weight: bold;
  }

  /* Style for the message textarea */
  textarea[name="message"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }

  /* Style for the submit button */
  input[type="submit"] {
    display: block;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }

  /* Hover effect for the submit button */
  input[type="submit"]:hover {
    background-color: red;
  }

  /* Style for the contact list */
  span {
    display: block;
    margin-bottom: 5px;
  }

  .update-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: white;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s;
    margin-right: 10px;
    color: #4CAF50;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  }

  .update-button:hover {
    background-color: black;
    color: white;
  }

  .update-button a {
    text-decoration: none;
    color: inherit;
  }

  /* Media query for screens smaller than 768px */
  @media (max-width: 768px) {
    #message-form {
      padding: 10px; /* Adjust padding for smaller screens */
    }

    input[type="submit"] {
      margin-top: 5px; /* Adjust margin for smaller screens */
    }

    /* You can add more styles for smaller screens as needed */
  }
</style>



<?php include 'pages/church.php';?><br><br>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection configuration
include 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the church from the URL
$churchFromURL = isset($_GET['church']) ? $_GET['church'] : '';

// Retrieve data from the "registration" table with upcoming birthdays
// Include the church condition in the SQL query
$sql = "SELECT contact, firstname, middlename, lastname, dob FROM registration WHERE DATE_FORMAT(dob, '%m-%d') = DATE_FORMAT(CURDATE(), '%m-%d') AND church = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error in SQL query: " . $conn->error);
}

$stmt->bind_param("s", $churchFromURL);
$stmt->execute();
$result = $stmt->get_result();

$message = ''; // Initialize message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_btn'])) {
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (empty($message)) {

    } else {
        $selectedContacts = isset($_POST['registration']) ? $_POST['registration'] : [];

        if (empty($selectedContacts)) {
            echo "<script>alert('No contacts selected');</script>";
        } else {
            // API and URL configuration
            $apiUrl = 'https://sms.arkesel.com/api/v2/sms/send';
            $apiKey = 'bGlJeW9USWRkRlBuQkVvbkJPUnc'; // Replace with your actual API key

            // Prepare the SMS payload
            $payload = [
                'sender' => 'METH-CHURCH',
                'message' => $message,
                'recipients' => $selectedContacts
            ];

            // Send the SMS using cURL
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => $apiUrl,
                CURLOPT_HTTPHEADER => ['api-key: ' . $apiKey],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => http_build_query($payload),
            ]);

            $response = curl_exec($curl);
            if ($response === false) {
                echo "<script>alert('Failed to send message');</script>";
            } else {
                echo "<script>alert('Message successfully sent');</script>";
            }

            // Close the cURL session
            curl_close($curl);
        }
    }
}
?>

<form id='message-form' action='' method='post' enctype='multipart/form-data'>
    <input type='checkbox' id='selectAll' onchange='toggleCheckboxes()'>
    <label for='selectAll'>Select All</label>
    <br><br>
    
    <!-- Add a hidden input field to capture the church value from the URL -->
    <input type="hidden" name="churchFromURL" value="<?php echo htmlspecialchars($churchFromURL); ?>">
    
    <textarea name='message' placeholder='Enter message' rows='4' cols='50'><?php echo $message; ?></textarea>
    <br><br>
    
    <input type='submit' name='send_btn' value='Send'>
    <br><br>

    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $contact = $row['contact'];
            $firstname = $row['firstname'];
            $middlename = $row['middlename'];
            $lastname = $row['lastname'];

            echo "<input type='checkbox' name='registration[]' value='$contact'>";
            echo "<span>$firstname $middlename $lastname - $contact</span><br>";
        }
    } else {
        // Display a message if no records are found
        echo "No upcoming birthdays found for the selected church.";
    }
    ?>

    <br>
</form>

<script>
    function toggleCheckboxes() {
        var selectAllCheckbox = document.getElementById('selectAll');
        var checkboxes = document.querySelectorAll('input[name="registration[]"]');

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = selectAllCheckbox.checked;
        }
    }
</script>

<?php
// Close the database connection
$conn->close();
?>












   

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
