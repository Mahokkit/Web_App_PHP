<?php
$hurray = array();
$string;
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
    You've Entered:
    <?php
        $int = (int)$_POST['num'];
        $str = (string)$_POST['text'];
        if ($int > 0 && $int <= 6)
        {
            $string = '<h' . $int . '>' . $str . '</h' . $int . '>';
            echo $string;
        }
        else
        {
            $string = "Invalid Number";
            echo $string;
        }
    ?>
</p>
</body>
</html>