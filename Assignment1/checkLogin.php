<?php
session_start();
ob_start();

$db = mysqli_connect("localhost", "root","inet2005", "test");
if (!$db)
{
    die('Could not connect to test database' . mysqli_connect_error());
}

if (isset($_POST['loginUser']) && isset($_POST['loginPwd']))
{
    $loginUser = $_POST['loginUser'];
    $loginPwd = $_POST['loginPwd'];
    $loginUser = stripcslashes($loginUser);
    $loginPwd = stripcslashes($loginPwd);

    $loginUser = mysqli_real_escape_string($db,$loginUser);
    $loginPwd = mysqli_real_escape_string($db,$loginPwd);

    $sql = "SELECT * FROM members WHERE username ='$loginUser'";
    $sql .= " AND password = '$loginPwd';";

    $result = mysqli_query($db, $sql);

    $count = mysqli_num_rows($result);

    mysqli_close($db);

    if ($count == 1)
    {
        $_SESSION['loginUser'] = $loginUser;
//        HTTP REDIRECT
        header('location:page1.php');
    }
    else
    {
        echo "<b> Invalid Login </b><br>";
        echo "<a href='mainLogin.php'> Try again </a>";
    }
}

ob_end_flush();
