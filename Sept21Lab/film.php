<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Film in Sakila</title>
    </head>
    <body>
        <?php
            $conn = mysqli_connect("localhost","root", "inet2005", "sakila");
            if (!$conn)
            {
                die("Could not connect: " . mysqli_connect_error());
            }

            $result = mysqli_query($conn, "select * from film limit 0,10");
            if (!$result)
            {
                die("Could not retrieve data: " . mysqli_error());
            }

            while($row = mysqli_fetch_assoc($result))
            {
                echo $row['title'] . " : " . $row['description'] . "<br/>";
            }
        ?>
    </body>
</html>