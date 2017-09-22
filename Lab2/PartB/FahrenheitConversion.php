<?php
    function FahToCel($f)
    {
        $c = ($f-32) * (5/9);
        return round($c,0);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fahrenheit Conversion</title>
        <style>
            table, th, td {
                border: 1px solid black;
        </style>
    </head>
    <body>
        <p>
            <a href="CelsiusConversion.php"> To see Celsius to Fahrenheit</a>
        </p>
        <table>
            <thead>
            <tr>
                <th>
                    Fahrenheit
                </th>
                <th>
                    Celsius
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($x <= 100):
                ?>
                <tr>
                    <td>
                        <?php
                        echo $x;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo FahToCel($x);
                        ?>
                    </td>
                </tr>
                <?php
                $x++;
            endwhile;
            ?>
            </tbody>
        </table>
    </body>
</html>