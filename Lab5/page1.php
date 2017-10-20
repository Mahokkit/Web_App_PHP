<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SELECT</title>
    </head>
    <body>
        <a href="form.php">Add Employees</a>
        <a href="employees.php"> Search for Employees</a>
        <form name="logoutForm" action="logOut.php" method="post">
            <input type="submit" name="logoutButton" value="Log Out" />
        </form>
    </body>
</html>