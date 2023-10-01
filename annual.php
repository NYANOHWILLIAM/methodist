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
        <a href="index.php" class="nav-link">SIGN OUT</a>
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
     $contact = $_GET['contact'];
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
    $contact = '';
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
    <a href="departments.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&contact=<?php echo urlencode($contact)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-bars" style="font-size: 14px;"></i>
        dashboard
    </a>
</li><br>


<?php
// Check if 'loginName' exists in the URL
if (isset($_GET['loginName'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
     $contact = $_GET['contact'];
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
    $contact = '';
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
    <a href="annual1.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&contact=<?php echo urlencode($contact)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-star" style="font-size: 14px;"></i>
        back
    </a>
</li><br>
 
             
<?php
// Check if 'loginName' exists in the URL
if (isset($_GET['loginName'])) {
    $loginName = $_GET['loginName'];
    $church = $_GET['church'];
     $contact = $_GET['contact'];
} else {
    // Handle the case where 'loginName' is not in the URL
    $loginName = ''; // You can set it to a default value or handle the error accordingly
    $church = '';
    $contact = '';
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
    <a href="view3.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&contact=<?php echo urlencode($contact)?>&church=<?php echo urlencode($church); ?>">
        <i class="fas fa-trash nav-icon" style="font-size: 14px;"></i>
        DELETE / EDIT / PRINT
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
  <title>Member Search</title>
</head>
  




<style>
body{
  text-align: center;
  background-color: gray;
 
}

h2 {
  text-align: center;
  margin-left: 0px;
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left:0px;

}

label {
  font-weight: bold;
  margin-right: 10px;
}

input[type="submit"] {
  font-size: 16px;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  height: 50px;
  width: 100px;
}

input[type="text"],
input[type="number"] {
  margin-right: 5px;
  border: 2px solid black;
  box-shadow: 5px;
  box-shadow: 0 0 2px;
  width: 180px;
  height: 50px;
  font-size: 18px;
  text-align: center;
}

input[type="submit"] {
  background-color: blue;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: red;
}

h2 {
  margin-top: 20px;
  font-size: 24px;
  text-align: center;
  color: white;
}

p {
  font-size: 16px;
  margin-bottom: 10px;
}


button a {
  display: inline-block;
  
  border-radius: 5px;
  text-decoration: none;
  background-color: red;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  border: none;
  transition: background-color 0.3s ease-in-out;
}

button a:hover {
  background-color: black;
}

button {
  margin: 20px 0;
  text-align: center;
}
button {
  margin-right:5px;
  font-size: 10px;
  margin-left: 0px ;
}


   #contact,
    #loginName,
    #church {
        display: none;
    }
</style>



<body>

 <?php include 'pages/church.php';?>

  <h3>ANNUAL HARVEST FUND</h3>

    



<form method="post">
    <label for="search">Search:</label>
    <input type="text" name="search" id="search" placeholder="Enter member ID" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" readonly>
    <input type="text" name="contact" id="contact" placeholder="Enter member contact" value="<?php echo isset($_GET['contact']) ? $_GET['contact'] : ''; ?>" readonly>
    <input type="text" name="loginName" id="loginName" placeholder="" value="<?php echo isset($_GET['loginName']) ? $_GET['loginName'] : ''; ?>" readonly>
     <input type="text" name="church" id="church" placeholder="" value="<?php echo isset($_GET['church']) ? $_GET['church'] : ''; ?>" readonly>

    <input type="submit" value="PAY" style="margin-right: 15px;">
    <button><a href="annual1.php<?php
  echo isset($_GET['loginName']) ? '?loginName=' . urlencode($_GET['loginName']) : '';
  echo isset($_GET['church']) ? '&church=' . urlencode($_GET['church']) : '';
?>">NEW ENTRY</a></button>

</form><br>

</body>
</html>

<?php
// Database configuration
include 'connection.php';

// Initialize variables
$church = "";

// Handle search query
if (isset($_POST['search'])) {
    // Check if the search query is not empty
    if (empty($_POST['search'])) {
        echo "<script>alert('Please enter a search term.'); window.history.back();</script>";
        exit();
    }

    // Get the search term from the POST data
    $search = mysqli_real_escape_string($conn, $_POST['search']);

    // Construct SQL query
    $sql = "SELECT * FROM annual WHERE id = '$search' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR lastname LIKE '%$search%'";

    // Execute SQL query
    $result = mysqli_query($conn, $sql);

    // Check if search query exists in the database
    if (mysqli_num_rows($result) > 0) {
        // Fetch the first row from the result set
        $row = mysqli_fetch_assoc($result);

        // Extract the member info from the row
        $id = $row['id'];
        $firstname = $row['firstname'];
        $middlename = $row['middlename']; // Correctly set $middlename here
        $lastname = $row['lastname']; // Correctly set $lastname here
        $contact = $row['contact'];
        $pic = $row['pic'];
        $loginName = $row['loginName'];
        $church = $row['church']; // Set the church variable here

        // Display member info
        echo "<h2>MEMBER INFO:</h2>";
        echo "<p>ID: $id</p>";
        echo "<p>Name: $firstname $middlename $lastname</p>";
        echo "<p>Contact: $contact</p>";

        // Calculate total amount
        $sql = "SELECT SUM(amount) AS total FROM annual WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_amount = $row['total'];

        // Display total amount
        echo "<p>Total Amount: GHS $total_amount</p>";

        // Add amount form
        echo "<h2>Add Amount:</h2>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<input type='hidden' name='firstname' value='$firstname'>";
        echo "<input type='hidden' name='middlename' value='$middlename'>";
        echo "<input type='hidden' name='lastname' value='$lastname'>";
        echo "<input type='hidden' name='loginName' value='$loginName'>";
        echo "<input type='hidden' name='church' value='$church'>"; // Include the church here
        echo "<label for='amount'>Amount (GHS):</label>";
        echo "<input type='number' name='amount' id='amount' min='0' step='0.01' placeholder='₵0.00'>";
        echo "<input type='submit' name='submit' value='DEPOSIT' style='margin-right: 10px;'>";
        echo "</form>";
    } else {
        echo "<script>alert('Please note that the MEMBER has not been added yet. You will be redirected to add the MEMBER before proceeding.'); window.location.href = 'annual1.php?loginName=" . urlencode($loginName) . "';</script>";
        exit();
    }
}

// Handle amount submission
if (isset($_POST['submit'])) {
    // Get the ID, firstname, loginName, and amount from the POST data
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']); // Correctly set $middlename here
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']); // Correctly set $lastname here
    $loginName = mysqli_real_escape_string($conn, $_POST['loginName']);
    $church = mysqli_real_escape_string($conn, $_POST['church']);

    // Validate the amount
    if (!is_numeric($amount) || $amount < 0) {
        // Display an error message if the amount is invalid
        echo "<script>alert('Please enter a valid amount for the MEMBER.'); window.history.back();</script>";
        exit();
    } else {
        // Construct the SQL query to insert the new amount into the mdf table
        $sql = "INSERT INTO annual (id, amount, firstname, middlename, lastname, loginName, church) VALUES ('$id', '$amount', '$firstname', '$middlename', '$lastname', '$loginName', '$church')";

        // Execute the SQL query
        if (mysqli_query($conn, $sql)) {
            // Retrieve contact from URL parameter
            $number = $contact;
            $firstname = $firstname;
            $middlename = $middlename;
            $lastname = $lastname;

            // Check if the contact is available
            if (!isset($number)) {
                echo "<script>alert('Contact number not found.'); window.location.href = 'annual1.php';</script>";
                exit();
            }

            $month = date('F'); // Get the current month name in default mode
            $message = "Dear $firstname,$middlename,$lastname,\nAn amount of ₵$amount (GHS) has been received as your annual harvest contribution for the month of $month.--Recipient:-$loginName(steward). Thank you.$church";

            // SEND SMS
            $hostname = "www.google.com";
            $port = 80;

            $internet_Connection = fsockopen($hostname, $port);

            if (empty($message)) {
                // Display an alert message if the message is empty
                echo "<script>alert('Please enter a message');</script>";
            } else {
                if (!$internet_Connection) {
                    echo "<script>alert('Message successfully sent and data saved');</script>";
                    echo "<script>window.location.href = 'annual1.php?loginName=" . urlencode($loginName) . "&church=" . urlencode($church) . "&contact=" . urlencode($contact) . "';</script>";
                    exit();
                } else {
                    $curl = curl_init();

                    curl_setopt_array($curl, [
                        CURLOPT_URL => 'https://sms.arkesel.com/api/v2/sms/send',
                        CURLOPT_HTTPHEADER => ['api-key: bGlJeW9USWRkRlBuQkVvbkJPUnc'],
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => http_build_query([
                            'sender' => 'METH-CHURCH',
                            'message' => $message,
                            'recipients' => [$number]
                        ]),
                    ]);

                    $response = curl_exec($curl);

                    curl_close($curl);

                    $_SESSION['status-sent-message'] = "Message successfully sent";

                    echo "<script>alert('Message successfully sent and data saved');</script>";
                    echo "<script>window.location.href = 'annual1.php?loginName=" . urlencode($loginName) . "&church=" . urlencode($church) . "&contact=" . urlencode($contact) . "';</script>";

                    exit();
                }
            }
        } else {
            // Display an error message if the query execution fails
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>












       
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
