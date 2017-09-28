<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add, Delete, and Update Actor</title>
        <style>
            table, th, tr, td { border: solid 1px maroon;}
        </style>
    </head>
    <body>
        <table>
            <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            </thead>
            <tbody>
            <?php
            require ('dbConn.php');
            $conn2 = getDbConnection();
            $sql2 = "SELECT * FROM `actor` ORDER by actor_id desc LIMIT 10";

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
        <p><b>Insert New Actor</b></p>
        <form id="newActor" name="newActor" method="post" action="addActor.php">
            <p><label>First Name: <input type="text" name="firstName" id="firstName" /></label></p>
            <p><label>Last Name: <input type="text" name="lastName" id="lastName" /></label></p>
            <p><input type="submit" id="insert" value="Insert" name="insert"/></p>
        </form>
        <p><b>Delete Actor via ID</b></p>
        <form id="deleteActor" name="deleteActor" method="post" action="deleteActor.php">
            <p><label>Actor Id: <input type="text" name="actorId" id="actorId" /></label></p>
            <p><input type="submit" id="delete" value="Delete" /></p>
        </form>
        <p><b>update Actor</b></p>
        <form id="updateActor" name="updateActor" method="post" action="updateActorForm.php">
            <p><label>Actor Id: <input type="text" name="actorIdUpdate" id="actorIdUpdate" /></label></p>
            <p><input type="submit" id="submit" value="Update" /></p>
        </form>
    </body>
</html>