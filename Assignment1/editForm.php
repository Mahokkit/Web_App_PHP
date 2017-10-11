<?php

    require 'isLoggedIn.php';
    checkIfLoggedIn();

    require_once("dbConn.php");
    $conn = getDbConnection();

    $TotalRec = mysqli_fetch_array(mysqli_query($conn,"SELECT emp_no FROM employees ORDER BY emp_no DESC LIMIT 1"));
    // get last row ID


    require_once("dbConn.php");
    $conn = getDbConnection();
    if(!$conn)
    {
        die("Unable to connect to database: " . mysqli_connect_error());
    }
    $id = $_POST['id'];
    $sql = "SELECT * FROM employees WHERE emp_no = $id";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        die("Employee with ID# $id was not found");
    }
    else
    {
        $data = mysqli_fetch_assoc($result);
        $empID = $data['emp_no'];
        $empBDate = $data['birth_date'];
        $empFName = $data['first_name'];
        $empLName = $data['last_name'];
        $empHDate = $data['hire_date'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editing Employees</title>
    <script src="validation.js" type="text/javascript"></script>
</head>
<body>
<p>
    <b>Edit Employee</b>
</p>
<form id="addEmp" name="addEmp" method="post" action="edit.php" onsubmit="return validate()">
    <p?
    <label>Employee ID:
        <input type="number" name="empID" id="empID" value="<?php echo $empID ?>" readonly/>
    </label>
    <p>
        <label>Birth Date:
            <input type="date" name="empBDate" id="empBDate" value="<?php echo $empBDate; ?>"/>
            <span id="BD" style="color: red; font-weight: bold"></span>
        </label>
    </p>
    <p>
        <label>First Name:
            <input type="text" name="empFName" id="empFName" value="<?php echo $empFName; ?>"/>
            <span id="FN" style="color: red; font-weight: bold"></span>
        </label>
    </p>
    <p>
        <label>Last Name:
            <input type="text" name="empLName" id="empLName" value="<?php echo $empLName; ?>"/>
            <span id="LN" style="color: red; font-weight: bold;"></span>
        </label>
    </p>
    <p>
        <label>Gender:
            <select name="empGender"required>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <!--<option value="O">Other</option> // cause there's more than one gender!-->
            </select>
        </label>
    </p>
    <p>
        <label>Hired Date:
            <input type="date" name="empHDate" id="empHDate" value="<?php echo $empHDate; ?>"/>
            <span id="HD" style="color: red; font-weight: bold;"></span>
        </label>
    </p>
    <p>
        <input type="submit" id="insert" value="Edit Employee" name="insert"/>
    </p>
</form>
<form name="logoutForm" action="logOut.php" method="post">
    <input type="submit" name="logoutButton" value="Log Out" />
</form>
<a href="page1.php">Back to Main Menu</a>
</body>
</html>