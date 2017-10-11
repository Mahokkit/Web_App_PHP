<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
    </head>
    <body>
        <?php
            session_start();
            $loginUser = $_SESSION['loginUser'];
        ?>
        <p>
            <b>Change Password</b>
        </p>
        <form id="changePW" name="changePW" method="post" action="updatePWord.php">
            <p>
                <label>User Name:
                    <input type="text" name="userName" id="userName" value="<?php echo $loginUser ?>" readonly/>
                </label>
            </p>
            <p>
                <label>Current Password:
                    <input type="password" name="currentPW" id="currentPW" />
                </label>
            </p>
            <p>
                <label>New Password:
                    <input type="password" name="newPW" id="newPW" />
                </label>
            </p>
            <p>
                <input type="submit" id="insert" value="Change Password" name="insert"/>
            </p>
        </form>
        <form name="logoutForm" action="logOut.php" method="post">
            <input type="submit" name="logoutButton" value="Log Out" />
        </form>
        <a href="page1.php">Back to Main Menu</a>
    </body>
</html>