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
              <i class="nav-icon fas fa-bars"></i>
              <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

         
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
    <a href="main.php?id=<?php echo urlencode($id); ?>&loginName=<?php echo urlencode($loginName)?>&church=<?php echo urlencode($church); ?>">
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
      // disable browser back and forward controls
      history.pushState(null, null, location.href);
      window.onpopstate = function () {
          history.go(1);
      };
    </script>

    
                       
<style type="text/css">
    
/* Reset some default styles for consistency */
  body {
            font-family: Arial, sans-serif;
            background-color: gray;
            margin: 0;
            padding: 10px;
        }

        h1,h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
            height: 15rem;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
               textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
             box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
             text-align: center;
             color: red;
        }

         input[type="number"]
           {
            width: 50%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
             box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        textarea {
            height: 80px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 16px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        input[type="submit"]:hover {
            background-color: RED;
        }

 

     button a {
      display: inline-block;
      padding: 5px 5px;
      border-radius: 5px;
      text-decoration: none;
      background-color: red;
      color: #fff;
      font-size: 10px;
      font-weight: bold;
      border: none;
      transition: background-color 0.3s ease-in-out;
      margin-left: ;
    }

    button a:hover {
      background-color: black;
    }


/* Media query for mobile responsiveness */
@media (max-width: 768px) {
    form {
        max-width: 80%;
    }
}


</style>
</head>
<body>


  <!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>HOME CELLS REGISTRATION</h1>
    <form action="" method="post">
        <input type="text" class="form-control" placeholder="Enter the name of your church" id="church" onBlur="convertToUppercase(this)" name="church" required readonly><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your home cell names here" required><br><br>

        <input type="submit" value="Submit">
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

       <script>
        document.getElementById("name").addEventListener("input", function () {
            // Get the input value and convert it to uppercase
            let inputValue = this.value.toUpperCase();
            
            // Replace spaces with underscores
            inputValue = inputValue.replace(/ /g, "_");
            
            // Set the modified value back to the input field
            this.value = inputValue;
        });
    </script>

</body>
</html>



<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $church = $_POST["church"];
    $name = $_POST["name"];

    // Validate and sanitize the inputs (you should add more validation)
    $church = htmlspecialchars(trim($church));
    $name = htmlspecialchars(trim($name));

    // Database connection details
  include 'connection.php';


    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert the data into the database
    $sql = "INSERT INTO cell (church, name) VALUES ('$church', '$name')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS for the container div */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CSS for the table */
        table {
            width: 40%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 13px;
            margin-left: 0px;

        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        /* CSS for the "No records found" message */
        .no-records {
            font-style: italic;
            color: #666;
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
   <?php
// Include the database connection details
include 'connection.php';

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the "church" value from the URL
if(isset($_GET['church'])){
    $churchFromURL = $_GET['church'];
} else {
    // Handle the case where "church" is not in the URL
    echo "Church not specified in the URL.";
    exit; // Stop further execution
}

// SQL query to select data from the database where "church" matches the URL value
$sql = "SELECT church, name FROM cell WHERE church = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $churchFromURL);
$stmt->execute();
$result = $stmt->get_result();

// Check if there are records in the result
if ($result->num_rows > 0) {
    // Start the HTML table
    echo "<div class='container'>"; // Centering container
    echo "<table>";
    echo "<tr><th>CLASS LEADERS</th></tr>";

    // Loop through the result and display data in table rows
    while ($row = $result->fetch_assoc()) {
        echo "</td><td>" . $row["name"] . "</td></tr>";
    }

    // Close the HTML table and container
    echo "</table>";
    echo "</div>";
} else {
    // Display a message if no records are found for the specified church
    echo "<div class='container'>"; // Centering container
    echo "<p class='no-records'>No records found for the specified church</p>";
    echo "</div>";
}

// Close the database connection
$conn->close();
?>

</body>
</html>


</body>
</html>

<br>


       
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
