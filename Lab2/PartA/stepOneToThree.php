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
        <title>Lab Two Part A Step 1</title>
    </head>
    <body>
    <p> Step One </p>
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

                for ($x=0;$x<=6;$x++)
                {
                    echo test($str, $x) . "<br>";
                }
            ?>
            <br>
        </p>
        <p> Step Two</p><br>
        <?php
        $var = "blah ";
        function IncrementByValue($str)
        {
            $str .= $str;
            return $str;
        }

        $var = IncrementByValue($var);
        echo "Increment By Value: " . $var . "<br>";

        function IncrementByReference(&$str)
        {
            $str .= $str;
            return $str;
        }

        $var = IncrementByReference($var);
        echo "Increment By Reference: " . $var . "<br>";
        ?>
        <br>
        <p> Step Three </p>
        <?php
        $MyGlobalVariable = rand(20,100);
        function usingGlobal()
        {
            global $MyGlobalVariable;
            return $MyGlobalVariable;
        }

        echo "This Person is " . usingGlobal() . " years old!";

        ?>
    </body>
</html>