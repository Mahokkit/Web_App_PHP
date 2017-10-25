<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Employee Updated</title>
    </head>
    <body>
        <?php

        require_once("dbConn.php");
        $conn = getDbConnection();

//        $id = $_POST['empID'];
//        $bdate = $_POST['empBDate'];
//        $fname = $_POST['empFName'];
//        $lname = $_POST['empLName'];
//        $gender = $_POST['empGender'];
//        $hdate = $_POST['empHDate'];

        $sql = "UPDATE employees SET birth_date = '";
        $sql .= mysqli_real_escape_string($_POST['empBDate']);
        $sql .= "', first_name = '";
        $sql .= mysqli_real_escape_string($_POST['empFName']);
        $sql .= "', last_name ='";
        $sql .= mysqli_real_escape_string($_POST['empLName']);
        $sql .= "', gender ='";
        $sql .= mysqli_real_escape_string($_POST['empGender']);
        $sql .= "', hire_date = '";
        $sql .= mysqli_real_escape_string($_POST['empHDate']);
        $sql .= "' WHERE emp_no = ";
        $sql .= mysqli_real_escape_string($_POST['empID']);
        $sql .= ";";


            $result = mysqli_query($conn, $sql);
            $affected = mysqli_affected_rows($conn);
            if(!$result)
            {
                die("Unable to update record: " . mysqli_error($conn));
            }
            else
            {
                echo "<h2>Success! " . $affected . " record was updated.</h2>";
            }


        mysqli_close($conn);

    ?>
        <p><a href="employees.php">Back to Employee Search Page</a></p>
        <form name="logoutForm" action="logOut.php" method="post">
            <input type="submit" name="logoutButton" value="Log Out" />
        </form>
        <a href="employees.php">Back to Main Menu</a>
    </body>
</html>