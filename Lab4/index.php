<?php
    include("circle.php");
    include("square.php");
    include("triangle.php");

    $radius = $_POST['radius'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $base = $_POST['base'];
    $height = $_POST['height'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My OO-PHP</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <fieldset>
                <legend>Circle</legend>
                <label>Radius: </label><input type="number" name="radius" id="radius" value="<?php echo $radius ?>"/>
            </fieldset>

            <fieldset>
                <legend>Square</legend>
                <label>Length: </label><input type="number" name="length" value="<?php echo $length ?>"/>
                <label>Width: </label><input type="number" name="width" value="<?php echo $width ?>"/>
            </fieldset>

            <fieldset>
                <legend>Triangle</legend>
                <label>Base: </label><input type="number" name="base" value="<?php echo $base ?>" />
                <label>Height: </label><input type="number" name="height" value="<?php echo $height ?>"/>
            </fieldset>

            <input type="submit" id="insert" value="Calculate" name="Calculate"/>
        </form>

        <p>
            <?php
                $circleArea = new circle($radius);
                $squareArea = new square($length, $width);
//                $triangleArea =;
                echo "Area of Circle with Radius of "
                    . $radius
                    . " is "
                    . $circleArea->CalculateArea() . "! <br>";
                echo "Area of Square with height of "
                    . $length
                    . " and width of "
                    . $width
                    . " is "
                    . $squareArea->CalculateArea() . "!";
            ?>
        </p>
    </body>
</html>