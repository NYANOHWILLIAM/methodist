



<style type="text/css">
    

    /* Add basic styling for your form */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f7f7f7;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

/* Media query for mobile view */
@media (max-width: 600px) {
    form {
        width: 90%;
        padding: 10px;
    }

    input[type="text"],
    input[type="date"] {
        padding: 8px;
    }
}
h2{
    text-align: center;
}

</style>

<?php include 'pages/church.php';?>
<h2>EDIT DATA</h2>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "id" value is set
    if (isset($_POST["id"])) {
        // Retrieve the ID entered in the form
        $id = $_POST["id"];

        // Connect to the database (replace with your database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "methodist";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch the data from the database based on the ID
        $sql = "SELECT * FROM registration WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the row as an associative array
            $row = $result->fetch_assoc();

// Check if the form has been submitted
if (isset($_POST["update"])) {
    // Retrieve the updated form fields
    $id = $_POST["id"];
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : "";
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $marital = isset($_POST["marital"]) ? $_POST["marital"] : "";
    $employment = isset($_POST["employment"]) ? $_POST["employment"] : "";
    $profession = isset($_POST["profession"]) ? $_POST["profession"] : "";
    $dob = isset($_POST["dob"]) ? $_POST["dob"] : "";
    $homeregion = isset($_POST["homeregion"]) ? $_POST["homeregion"] : "";
    $hometown = isset($_POST["hometown"]) ? $_POST["hometown"] : "";
    $locationaddress = isset($_POST["locationaddress"]) ? $_POST["locationaddress"] : "";
    $contact = isset($_POST["contact"]) ? $_POST["contact"] : "";
    $membership = isset($_POST["membership"]) ? $_POST["membership"] : "";
    $inclass = isset($_POST["inclass"]) ? $_POST["inclass"] : "";
    $leadername = isset($_POST["leadername"]) ? $_POST["leadername"] : "";
    $selectedleadername = isset($_POST["selectedleadername"]) ? $_POST["selectedleadername"] : "";
    $roll = isset($_POST["roll"]) ? $_POST["roll"] : "";
    $Organ = isset($_POST["Organ"]) ? $_POST["Organ"] : "";
    $circuit = isset($_POST["circuit"]) ? $_POST["circuit"] : "";
    $society = isset($_POST["society"]) ? $_POST["society"] : "";
    $minister = isset($_POST["minister"]) ? $_POST["minister"] : "";
    $distant = isset($_POST["distant"]) ? $_POST["distant"] : "";
    $churchmember = isset($_POST["churchmember"]) ? $_POST["churchmember"] : "";
    $locationname = isset($_POST["locationname"]) ? $_POST["locationname"] : "";
    $churchname = isset($_POST["churchname"]) ? $_POST["churchname"] : "";

    // Update the data in the database
    $updateSql = "UPDATE registration SET
        title = '$title',
        firstname = '$firstname',
        middlename = '$middlename',
        lastname = '$lastname',
        gender = '$gender',
        marital = '$marital',
        employment = '$employment',
        profession = '$profession',
        dob = '$dob',
        homeregion = '$homeregion',
        hometown = '$hometown',
        locationaddress = '$locationaddress',
        contact = '$contact',
        membership = '$membership',
        inclass = '$inclass',
        leadername = '$leadername',
        selectedleadername = '$selectedleadername',
        roll = '$roll',
        Organ = '$Organ',
        circuit = '$circuit',
        society = '$society',
        minister = '$minister',
        distant = '$distant',
        churchmember = '$churchmember',
        locationname = '$locationname',
        churchname = '$churchname'
        WHERE id = '$id'";

                if ($conn->query($updateSql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }

            // Display the data in a form for editing
         
            echo '<form method="post" enctype="multipart/form-data">';
            
            // Add your form fields here
            echo '<label>Title:</label>';
            echo '<input type="text" name="title" value="' . $row['title'] . '"><br><br>';

            echo '<label>FirstName:</label>';
            echo '<input type="text" name="firstname" value="' . $row['firstname'] . '"><br><br>';

            echo '<label>MiddleName:</label>';
            echo '<input type="text" name="middlename" value="' . $row['middlename'] . '"><br><br>'; 

            echo '<label>LastName:</label>';
            echo '<input type="text" name="lastname" value="' . $row['lastname'] . '"><br><br>';

            echo '<label>Gender:</label>';
            echo '<input type="text" name="gender" value="' . $row['gender'] . '"><br><br>';

            echo '<label>Marital Status:</label>';
            echo '<input type="text" name="marital" value="' . $row['marital'] . '"><br><br>';

            echo '<label>Employment:</label>';
            echo '<input type="text" name="employment" value="' . $row['employment'] . '"><br><br>';

            echo '<label>Profession:</label>';
            echo '<input type="text" name="profession" value="' . $row['profession'] . '"><br><br>';

            echo '<label>Date of Birth:</label>';
            echo '<input type="date" name="dob" value="' . $row['dob'] . '"><br><br>';

            echo '<label>Home Region:</label>';
            echo '<input type="text" name="homeregion" value="' . $row['homeregion'] . '"><br><br>';

            echo '<label>Hometown:</label>';
            echo '<input type="text" name="hometown" value="' . $row['hometown'] . '"><br><br>';

            echo '<label>Location Name:</label>';
            echo '<input type="text" name="locationaddress" value="' . $row['locationaddress'] . '"><br><br>';

            echo '<label>Contact:</label>';
            echo '<input type="text" name="contact" value="' . $row['contact'] . '"><br><br>';

            echo '<label>Membership:</label>';
            echo '<input type="text" name="membership" value="' . $row['membership'] . '"><br><br>';

            echo '<label>Inclass:</label>';
            echo '<input type="text" name="inclass" value="' . $row['inclass'] . '"><br><br>';

            echo '<label>Leader Name:</label>';
            echo '<input type="text" name="selectedleadername" value="' . $row['selectedleadername'] . '"><br><br>';

            echo '<label>Roll:</label>';
            echo '<input type="text" name="roll" value="' . $row['roll'] . '"><br><br>';

            echo '<label>Organization:</label>';
            echo '<input type="text" name="Organ" value="' . $row['Organ'] . '"><br><br>';

            echo '<label>Diocese:</label>';
            echo '<input type="text" name="diocese" value="' . $row['diocese'] . '"><br><br>';

            echo '<label>Circuit:</label>';
            echo '<input type="text" name="circuit" value="' . $row['circuit'] . '"><br><br>';

            echo '<label>Ghamsu:</label>';
            echo '<input type="text" name="ghamsu" value="' . $row['ghamsu'] . '"><br><br>';

            echo '<label>Institution:</label>';
            echo '<input type="text" name="institution1" value="' . $row['institution1'] . '"><br><br>';

            echo '<label>Wing:</label>';
            echo '<input type="text" name="wing1" value="' . $row['wing1'] . '"><br><br>';

            echo '<label>Position:</label>';
            echo '<input type="text" name="position1" value="' . $row['position1'] . '"><br><br>';

            echo '<label>Society:</label>';
            echo '<input type="text" name="society" value="' . $row['society'] . '"><br><br>';

            echo '<label>Minister:</label>';
            echo '<input type="text" name="minister" value="' . $row['minister'] . '"><br><br>';

            echo '<label>Distant:</label>';
            echo '<input type="text" name="distant" value="' . $row['distant'] . '"><br><br>';

            echo '<label>Church Member:</label>';
            echo '<input type="text" name="churchmember" value="' . $row['churchmember'] . '"><br><br>';

            echo '<label>Church Name:</label>';
            echo '<input type="text" name="churchname" value="' . $row['churchname'] . '"><br><br>';
            
            echo '<label>Location Name:</label>';
            echo '<input type="text" name="locationname" value="' . $row['locationname'] . '"><br><br>';

            // Hidden ID field
            echo '<input type="hidden" name="id" value="' . $id . '">';
            
            // Submit button
            echo '<input type="submit" name="update" value="Update">';
            
            echo '</form>';
        } else {
            echo "No records found with the provided ID.";
        }

        $conn->close();
    }
}
?>



