<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PartA Step 2 - With Search</title>
        <style>
            table, th, tr, td { border: solid 1px maroon;}
        </style>
    </head>
    <body>
        <table>
            <thead>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
            <?php
            require_once("dbConn.php");
            $conn = getDbConnection();
            $str = (string)$_POST['desc'];
            $sql = "SELECT * FROM film WHERE description LIKE '%" . $str . "%' LIMIT 0,10";

            if(isset($_POST['submit']))
            {
                echo "<meta http-equiv='refresh' content='0'>";
            }
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                die("Could not retrieve records from database: " . mysqli_error($conn));
            }

            while($row = mysqli_fetch_assoc($result)):
                ?>
                <tr>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                </tr>

                <?php
            endwhile;

            mysqli_close($conn);
            ?>
            </tbody>
        </table>
        <form method="post">
            Search Description: <input type="text" name="desc">
            <input type="submit">
            <br>
        </form>
    </body>
</html>