
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Description</th>
    </tr>

    <?php
    include("Step3.php");
    ?>

    <?php


    $sql = "SELECT film.film_id,film.title,film.description";
    $sql .= " FROM film";
    $sql .= " ON film.language_id=language.language_id";
    $sql .= " LIMIT 0,10;";

    $result = mysqli_query($db,$sql);
    if(!$result)
    {
        die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>". $row['title'] . "</td>";
        echo "<td>". $row['description'] . "</td>";
        echo "<td>". $row['name'] . "</td>";

    }

    ?>

    <?php
    include("Step3B.php");
    ?>

</table>
</body>
</html>
