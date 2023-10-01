




 <h3>GENDER SECTIONS</h3>


<style>

    img {
  width: 80px;
  height: 80px;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
  position: fixed;
  top: 10px;
  right: 10px;
  margin-right:50px ;
}


   h1,h3{
   	text-align: center;
   }

    .form-container {
        border: 1px solid black;
        padding: 2px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .form-container a {
        display: inline-block;
        padding: 5px;
        margin: 5px;
        border-radius: 5px;
        text-decoration: none;
        background-color: whitesmoke;
        color: grey;
        font-size: 16px;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease-in-out;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        margin-left: 250;
    }

    .form-container a:hover {
        background-color: red;
        color: white;
    }



    .button {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        background-color: #007bff;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease-in-out;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        margin-right: 10px;
    }

    .button:last-child {
        margin-right: 0;
    }

    .button:hover {
        background-color: red;
    }
</style>




<br>


<div class="form-container" style="border: 1px solid black; padding: 2px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
    <?php
    $loginName = isset($_GET['loginName']) ? $_GET['loginName'] : '';

     

     echo "<a href='allmembers.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>ALL MEMBERS WITH THEIR AGE</a>";

   

      echo "<a href='maleonly.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>MALE WITH AGE</a>";


      echo "<a href='mmembers.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>MALE WITH NO AGE</a>";

        echo "<a href='femaleonly.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>FEMALE WITH AGE</a>";

          echo "<a href='ffemale.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>FEMALE WITH NO AGE</a>";

             echo "<a href='yr.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>CHILDREN SERVICE</a>";    

                echo "<a href='br.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>TEEN SERVICE</a>";


                echo "<a href='he.php?loginName=" . urlencode($loginName) . "' style='text-decoration: none;'>ALDULTS</a>";                                         
    ?>
</div><br><br><br><br>

