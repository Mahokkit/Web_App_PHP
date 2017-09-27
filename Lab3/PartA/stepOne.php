<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PartA Step 1 - 10 Films</title>
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

            $result = mysqli_query($conn,"SELECT * FROM film LIMIT 0,10");
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
    </body>
</html>