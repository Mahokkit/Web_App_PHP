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

        $empFName = $_POST['empFName'];
        $empLName = $_POST['empLName'];
        $empBDate = $_POST['empBDate'];
        $empGender = $_POST['empGender'];
        $empHDate = $_POST['empHDate'];

        $sql = "INSERT INTO employees (birth_date, first_name, last_name, gender, hire_date) VALUE ('$empBDate','$empFName', '$empLName','$empGender','$empHDate')";

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

        echo
            "<p>Employee Name: " . $empFName . " " . $empLName . "<br>" .
            "Employee Birth Date: " . $empBDate . "<br>" .
            "Employee Gender: " . $empGender . "<br>" .
            "Employee Hired Date: " . $empHDate . "</p>";
    ?>
    <p><h1>SUCCESS!</h1></p>
</body>
</html>