<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Employees Table</title>
        <style>
            table, th, tr, td
            {
                border: solid 1px maroon;
                text-align: center;
            }
        </style>
    </head>
    <body>
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


            if(isset($_GET['id'])){
                $rowStarts = $_GET['id'];
            }else{
                $rowStarts = 0;
            }
//            $rowStarts = $_GET['id'];
            $maxRow = 25;

            $TotalRec = mysqli_num_rows(mysqli_query("SELECT * FROM 'employees'"));

            $sql = "SELECT * FROM `employees` LIMIT $rowStarts, $maxRow";
//            $sql = "SELECT * FROM `employees` LIMIT 50, 25";
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                die("Could not retrieve records from database: " . mysqli_error($conn));
            }

            while($row = mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?php echo $row['emp_no'] ?></td>
                    <td><?php echo $row['birth_date'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['hire_date'] ?></td>
                </tr>

                <?php
            endwhile;

            mysqli_close($conn);
            ?>
            </tbody>
        </table>
        <?php
        if($rowStarts == 0)
        {
            echo "Previous &laquo;";
        }
        else
        {
            echo "<a href='employees.php?id=" . ($rowStarts - 25) ."'>Previous &laquo;</a>";
        }
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        if($rowStarts == $TotalRec-1)
        {
            echo "Next &raquo;";
        }
        else
        {
            echo "<a href='employees.php?id=" . ($rowStarts + 25) ."'>Next &raquo;</a>";
        }
//        Source: https://www.sitepoint.com/community/t/previous-and-next-row-from-mysql-using-php/3354/15
        ?>
    </body>
</html>