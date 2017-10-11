<?php
session_start();
ob_start();

$db = mysqli_connect("localhost", "root","inet2005", "sakila");
if (!$db)
{
    die('Could not connect to test database' . mysqli_connect_error());
}

$userName = $_POST['loginUser'];
$passWord = hash("sha512", $_POST['loginPwd']);

$sql = "INSERT INTO members (username, password) VALUES ('$userName', '$passWord');";

$result = mysqli_query($db, $sql);
$affected = mysqli_affected_rows($conn);
if(!$result)
{
    die("Unable to update record: " . mysqli_error($conn));
}
else
{
    echo "<h2>Success! " . $affected . " record was updated. User " . $userName . " was added</h2>";
}


mysqli_close($conn);
session_destroy();
?>

<html>
    <a href="mainLogin.php"> back to main login</a>
</html>
