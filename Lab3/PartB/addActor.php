<html>
    <head>
        <title>Add new actors</title>
        <style>
            table, th, tr, td { border: solid 1px maroon;}
        </style>
    </head>
    <body>

    <form id="newActor" name="newActor" method="post">
        <p><label>First Name: <input type="text" name="firstName" id="firstName" /></label></p>
        <p><label>Last Name: <input type="text" name="lastName" id="lastName" /></label></p>
        <p><input type="submit" id="submit" value="submit" /></p>
    </form>
    <?php
    if(!empty($_POST['firstName']) && !empty($_POST['lastName']))
    {
        require_once("dbConn.php");
        $conn = getDbConnection();
        if(!$conn)
        {
            die("Unable to connect to database: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO actor (first_name, last_name) VALUES ('";
        $sql .= $_POST['firstName'];
        $sql .= "','";
        $sql .= $_POST['lastName'];
        $sql .= "');";

        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            die("Unable to insert record: " . mysqli_error($conn));
        }
        else
        {
            echo "<h2>Success! Record was entered.</h2>";
        }

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
    </body>
</html>