<!DOCTYPE html>
<html>
    <head>
        <title>Delete actors</title>
    </head>
    <style>
        table, th, tr, td { border: solid 1px maroon;}
    </style>
    <body>
        <?php
        if(!empty($_POST['actorId']))
        {
            require_once("dbConn.php");
            $conn = getDbConnection();

            if(!$conn)
            {
                die("Unable to connect to database: " . mysqli_connect_error());
            }

            $sql = "DELETE FROM actor WHERE actor_id = ";
            $sql .= $_POST['actorId'];
            $sql .= ";";

            $result = mysqli_query($conn, $sql);
            if(!$result)
            {
                die("Unable to delete record: " . mysqli_error($conn));
            }
            else
            {
                echo "<h2>Success! Record was deleted.</h2>";
            }

            mysqli_close($conn);
        }

        ?>

        <table>
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </thead>
            <tbody>
            <?php
            $conn2 = getDbConnection();
            $sql2 = "SELECT * FROM `actor` ORDER by actor_id desc LIMIT 10";

            if(isset($_POST['submit']))
            {

                echo "<meta http-equiv='refresh' content='0'>";
            }
            $result2 = mysqli_query($conn2,$sql2);
            if(!$result2)
            {
                die("Could not retrieve records from database: " . mysqli_error($conn2));
            }

            while($row = mysqli_fetch_assoc($result2)):
                ?>
                <tr>
                    <td><?php echo $row['actor_id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                </tr>

                <?php
            endwhile;

            mysqli_close($conn);
            ?>
            </tbody>
        </table>
        <p><a href="form.html">Go Back</a></p>
    </body>
</html>