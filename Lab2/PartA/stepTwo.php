<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 2 Part A Step 2</title>
    </head>
    <body>
        <?php
            $var = "blah ";
            function IncrementByValue($str)
            {
                $str .= $str;
                return $str;
            }

            $var .= IncrementByValue($var);
            echo "Increment By Value: " . $var . "<br>";

            function IncrementByReference(&$str)
            {
                $str .= $str;
                return $str;
            }

            $var .= IncrementByReference($var);
            echo "Increment By Reference: " . $var . "<br>";
        ?>
    </body>
</html>