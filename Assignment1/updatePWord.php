<?php
    session_start();
    ob_start();

    $db = mysqli_connect("localhost", "root","inet2005", "sakila");
    if (!$db)
    {
        die('Could not connect to test database' . mysqli_connect_error());
    }

    if (isset($_POST['loginUser']) && isset($_POST['loginPwd'])) {
        $userName = $_POST['userName'];
        $currentPW = $_POST['currentPW'];
        $userName = stripcslashes($loginUser);
        $currentPW = stripcslashes($loginPwd);

        $userName = mysqli_real_escape_string($db, $loginUser);
        $currentPW = mysqli_real_escape_string($db, $loginPwd);
        $currentPW = hash("sha512", $loginPwd);
        $orgSQL = "SELECT password FROM members WHERE username = $userName;";
        //    $sql .= " AND password = '$loginPwd';";

        $curDBPass = mysqli_query($db, $sql);
    }

//    $count = mysqli_num_rows($result);
//
//    mysqli_close($db);
//
//    if ($count == 1)
//    {
//        $_SESSION['loginUser'] = $loginUser;
////        HTTP REDIRECT
//        header('location:page1.php');
//    }
//    else
//    {
//        echo "<b> Invalid Login </b><br>";
//        echo "<a href='mainLogin.php'> Try again </a>";
//    }
//}
//
//ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Password Change</title>
    </head>
    <body>
        <?php
            echo "<p>$curDBPass</p>"
        ?>
    </body>
</html>