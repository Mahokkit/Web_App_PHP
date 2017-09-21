<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 2 Part A Step 3</title>
    </head>
    <body>
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