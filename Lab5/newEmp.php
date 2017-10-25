<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>

<!DOCTYPE html>
<head>
    <title>New Employee Added</title>
</head>
<body>
    <?php
        require_once("dbConn.php");
        $conn = getDbConnection();

        $empID = $_POST['empID'];
        $empFName = mysqli_real_escape_string($_POST['empFName']);
        $empLName = mysqli_real_escape_string($_POST['empLName']);
        $empBDate = mysqli_real_escape_string($_POST['empBDate']);
        $empGender = mysqli_real_escape_string($_POST['empGender']);
        $empHDate = mysqli_real_escape_string($_POST['empHDate']);

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
    <p><a href="employees.php">Back to Employee Table</a></p>
</body>
</html>