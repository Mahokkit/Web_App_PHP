<?php

    require 'isLoggedIn.php';
    checkIfLoggedIn();

    require_once("dbConn.php");
    $conn = getDbConnection();

    $id = $_POST['id'];
?>
<!DOCTYPE html>
    <head>
        <title>Deleted Rows</title>
        <style>
            table, th, tr, td
            {
                border: solid 1px maroon;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <p><h1>ARE YOU SURE YOU WANT TO DELETE THIS RECORD?</h1></p>
    <table>
        <thead>
        <th>Employee #</th>
        <th>Date of Birth</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Date of Hire</th>
        </thead>
        <tbody>
        <?php
        require_once("dbConn.php");
        $conn = getDbConnection();

        $showSQL = "SELECT * FROM employees WHERE emp_no='$id'";
        $showResult = mysqli_query($conn,$showSQL);
        $affected = mysqli_affected_rows($conn);
        if(!$showResult)
        {
            die("Could not retrieve records from database: " . mysqli_error($conn));
        }
        while($row = mysqli_fetch_assoc($showResult)):
            ?>
            <tr>
                <td><?php echo $row['emp_no'] ?></td>
                <td><?php echo $row['birth_date'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['hire_date'] ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['emp_no']; ?>" />
                        <input type="submit" name="submit" value="Delete"/>
                    </form>
                </td>
            </tr>

            <?php endwhile;
        mysqli_close($conn);
        ?>
        </tbody>
    </table>
    <p><a href="employees.php">Back to Employee Search Page</a></p>
    <form name="logoutForm" action="logOut.php" method="post">
        <input type="submit" name="logoutButton" value="Log Out" />
    </form>
    <a href="employees.php">Back to Main Menu</a>
    </body>
</html>