<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Target Page</title>
</head>
<body>
    <?php
        $empFName = $_POST['empFName'];
        $empLName = $_POST['empLName'];
        $empBDate = $_POST['empBDate'];
        $empGender = $_POST['empGender'];
        $empHDate = $_POST['empHDate'];

        echo
            "<p>Employee Name: " . $empFName . " " . $empLName . "<br>" .
            "Employee Birth Date: " . $empBDate . "<br>" .
            "Employee Gender: " . $empGender . "<br>" .
            "Employee Hired Date: " . $empHDate . "</p>";
    ?>
    <p><h1>SUCCESS!</h1></p>
</body>
</html>