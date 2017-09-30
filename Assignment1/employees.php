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
        <form method="post">
            Search First and Last Name: <input type="text" name="desc" value="<?php echo $_POST['desc']; ?>">
            <input type="submit">
            <br>
        </form>
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

            $maxRow = 25;

            $TotalRec = mysqli_num_rows(mysqli_query("SELECT * FROM 'employees'"));

            $sql = "SELECT * FROM employees LIMIT $rowStarts, $maxRow";
            $str = (string)$_POST['desc'];
            $searchSQL = "SELECT * FROM employees WHERE first_name LIKE '%$str%' OR last_name LIKE '%$str%' LIMIT $rowStarts,$maxRow";

            if ($str = "")
            {
                $result = mysqli_query($conn,$sql);
            }
            else
            {
                $result = mysqli_query($conn,$searchSQL);
            }

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
//            echo "Previous &laquo;";
            echo "<button> &lt; </button>";
        }
        else
        {
            echo "<a href='employees.php?id=" . ($rowStarts - 25) ."'><button>&lt;</button></a>";
        }
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

        if($rowStarts == $TotalRec-1)
        {
            echo "<button>&gt;</button>";
        }
        else
        {
            echo "<a href='employees.php?id=" . ($rowStarts + 25) ."'><button>&gt;</button></a>";
        }
//        Source: https://www.sitepoint.com/community/t/previous-and-next-row-from-mysql-using-php/3354/15
        ?>
    </body>
</html>

<!--SELECT * FROM (SELECT * FROM employees ORDER BY emp_no DESC LIMIT 25) sub ORDER BY emp_no ASC;-->
<!--SELECT * FROM employees WHERE first_name LIKE '%war%' OR last_name LIKE '%war%'-->