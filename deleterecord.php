<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        .profile-pic {
            position: relative;
        }

        .profile-pic img {
            position: absolute;
            down: 500px;
            right: 0;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: RED;
        }

        h1, h2 {
            text-align: center;
        }

        .hidden-form {
            display: none;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            right: 0;
            margin-right: 80px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
<img src="meth.png" alt="my image" class="specific-image">
<h1>THE METHODIST CHURCH GHANA - KINTAMPO CIRCUIT</h1>

<form method="post" action="" class="hidden-form">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
    <input type="submit" name="search" value="Search">
</form>

<?php
// MySQL database connection settings
include 'connection.php';


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to delete records
function deleteRecord($id)
{
    global $conn;
    $sql = "DELETE FROM registration WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

try {
    // Check if delete button is pressed
    if (isset($_POST['delete'])) {
        $idToDelete = $_POST['id'];
        deleteRecord($idToDelete);
    }

    // Check if ID is provided in the URL
    if (isset($_GET['id'])) {
        $idToSearch = $_GET['id'];
        $sql = "SELECT * FROM registration WHERE id = '$idToSearch'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <h2>INFORMATION</h2>

            <div class="profile-pic">
                <?php
                $pic = $row['pic'];
                echo "<img src='register/$pic' alt='Member Image'>"; // target folder is register
                ?><br><br><br><br><br><br><br><br><br>
            </div>

            <table>
                <tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>MIDDLE NAME</th>
                    <th>LAST NAME</th>
                </tr>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['middlename']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                </tr>
            </table>

            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"><br><br>
                <input type="submit" name="delete" value="Delete">
            </form>
            <?php
        } else {
             echo "<script>alert('No record found. Enter id at the space provided'); window.location.href = 'uu.php';</script>";
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

</body>
</html>
