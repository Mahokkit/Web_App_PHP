<?php
    include("circle.php");
    include("square.php");
    include("triangle.php");

    $radius = $_POST['radius'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $base = $_POST['base'];
    $height = $_POST['height'];

    $circleArea = new circle($radius);
    $squareArea = new square($length, $width);
    $triangleArea = new triangle($height,$base);
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

        <p> Result </p>

        <h1>Shape: Circle</h1>
        <p>Area: <?php echo $circleArea->CalculateArea() ?> </p>

        <h1>Shape: Square</h1>
        <p>Area: <?php echo $squareArea->CalculateArea() ?> </p>

        <h1>Shape: Triangle</h1>
        <p>Area: <?php echo $triangleArea->CalculateArea() ?> </p>

    </body>
</html>