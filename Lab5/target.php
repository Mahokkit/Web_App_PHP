<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Target Page</title>
</head>
<body>
    <?php

        require_once("dbConn.php");
        $conn = getDbConnection();

        $empID = $_POST['empID'];
        $empFName = $_POST['empFName'];
        $empLName = $_POST['empLName'];
        $empBDate = $_POST['empBDate'];
        $empGender = $_POST['empGender'];
        $empHDate = $_POST['empHDate'];

        $sql = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) ";
        $sql .= "VALUE ('$empID','$empBDate','$empFName', '$empLName','$empGender','$empHDate')";
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

    ?>
    <p><a href="employees.php">Employee table to check!</a></p>
</body>
</html>