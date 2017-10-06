<?php

    require 'isLoggedIn.php';
    checkIfLoggedIn();

    require_once("dbConn.php");
    $conn = getDbConnection();

    $id = $_POST['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Deleted Rows</title>
    </head>
    <body>
    <?php

        if(!$conn)
        {
            die("Unable to connect to database: " . mysqli_connect_error());
        }

        $sql = "DELETE FROM employees WHERE emp_no='$id'";
        $result = mysqli_query($conn, $sql);
        $affected = mysqli_affected_rows($conn);
        if(!$result)
        {
            die("Unable to delete record: " . mysqli_error($conn));
        }
        else
        {
            echo "<h2>Success! " . $affected . " record was deleted.</h2>";
        }

        mysqli_close($conn);
    ?>
    <p><a href="employees.php">Back to Employee Search Page</a></p>
    </body>
</html>