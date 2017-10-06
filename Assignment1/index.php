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
        <form name="logoutForm" action="logOut.php" method="post">
            <input type="submit" name="logoutButton" value="Log Out" />
        </form>
    </body>
</html>