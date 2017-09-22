<?php
function CelToFah($c)
{
    $f = ($c * (5/9)) + 32;
    return round($f,0);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Celsius Conversion</title>
        <style>
            table, th, td
            {
                border: 1px solid black;
            }
            th
            {
                background: #CCC
            }
            tr:nth-child(even)
            {
                background: #CCC
            }
            tr:nth-child(odd)
            {
                background: #FFF
            }
        </style>
    </head>
    <body>
        <p>
            <a href="FahrenheitConversion.php"> To see Fahrenheit to Celsius</a>
        </p>
        <table>
            <thead>
            <tr>
                <th>
                    Celsius
                </th>
                <th>
                    Fahrenheit
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
                        echo CelToFah($x);
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