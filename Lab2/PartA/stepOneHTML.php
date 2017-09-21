<?php
    $hurray = array();

    function test ($s, $i)
    {
        if ($i > 0 && $i <= 6)
        {
            $string = '<h' . $i . '>' . $s . '</h' . $i . '>';
            $hurray[] = $string;
            return $string;
        }
        else
        {
            $string = "Invalid Number";
            $hurray[] = $string;
            return $string;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab Two Part A</title>
    </head>
    <body>
    <form action="#" method="post">
        Enter a number: <input type="number" name="num">
        <br>
        Enter a string: <input type="text" name="text">
        <input type="submit">
        <br>
    </form>
        <p>
            You've Entered: <br>
            <?php

                $int = (int)$_POST['num'];
                $str = (string)$_POST['text'];

                for ($x=0;$x<=6;$x++) {
                    echo test($str, $x) . "<br>";
                }
            ?>
            <br>
        </p>
    </body>
</html>