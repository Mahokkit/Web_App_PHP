<?php
    $hurray = array();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab Two Part A</title>
    </head>
    <body>
        <form action="#" method="post">
            Enter a number: <input type="text" name="num">
            <input type="submit">
            <br>
        </form>
        <p>
            You've Entered:
            <?php
                $int = (int)$_POST['num'];
                if ($int <= 6)
                {
                    echo '<h' . $int . '>' . $int . '</h' . $int . '>';
                }
                else
                {
                    echo "Invalid Number";
                }
            ?>
        </p>
    </body>
</html>