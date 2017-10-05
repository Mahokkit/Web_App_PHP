<?php
require_once("dbConn.php");
$conn = getDbConnection();

$TotalRec = mysqli_fetch_array(mysqli_query($conn,"SELECT emp_no FROM employees ORDER BY emp_no DESC LIMIT 1"));
// get last row ID
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Employees</title>
    <script src="validation.js" type="text/javascript"></script>
</head>
    <body>
        <p>
            <b>Insert New Employee</b>
        </p>
        <form id="addEmp" name="addEmp" method="post" action="target.php" onsubmit="return validate()">
            <p?
                <label>Employee ID:
                    <input type="number" name="empID" id="empID" value="<?php echo $TotalRec[0]+1 ?>" readonly/>
                </label>
            <p>
                <label>Birth Date:
                    <input type="date" name="empBDate" id="empBDate" value="YYYY-MM-DD"/>
                    <span id="BD" style="color: red; font-weight: bold"></span>
                </label>
            </p>
            <p>
                <label>First Name:
                    <input tygpe="text" name="empFName" id="empFName" />
                    <span id="FN" style="color: red; font-weight: bold"></span>
                </label>
            </p>
            <p>
                <label>Last Name:
                    <input type="text" name="empLName" id="empLName" />
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
                    <input type="date" name="empHDate" id="empHDate" value="YYYY-MM-DD"/>
                    <span id="HD" style="color: red; font-weight: bold;"></span>
                </label>
            </p>
            <p>
                <input type="submit" id="insert" value="Add Employee" name="insert"/>
            </p>
        </form>
    </body>
</html>