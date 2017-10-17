<?php
    include_once("circle.php");
    include_once("square.php");
    include_once("triangle.php");



    $circleArea = new circle($_POST['radius'], $_POST['gos']);
    $squareArea = new square($_POST['length'], $_POST['width']);
    $triangleArea = new triangle($_POST['height'],$_POST['base']);

    $radius = $circleArea->radius;
    $gos = $_POST['gos'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My OO-PHP</title>
    </head>
    <body>

        <form action="" method="post">

            <fieldset>
                <legend>Circle</legend>
                <label>Radius: </label>
                <input type="number" name="radius" id="radius" step="any" value="<?php echo $radius; ?>"/>
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

            <p><label>Grow or Shrink By (%): </label><input type="number" name="gos" value="<?php echo $gos ?>" /></p>

            <input type="submit" id="insert" value="Calculate" name="Calculate"/>

        </form>

        <p> Result </p>

        <h3>Shape: Circle</h3>
        <p>Area: <?php echo $circleArea->CalculateArea(); ?> </p>
        <p>Grow or Shrink Area: <?php echo $circleArea->gos(); ?></p>
        <p>New Radius: <?php echo $circleArea->radius(); ?></p>

        <h3>Shape: Square</h3>
        <p>Area: <?php echo $squareArea->CalculateArea() ?> </p>

        <h3>Shape: Triangle</h3>
        <p>Area: <?php echo $triangleArea->CalculateArea() ?> </p>
        <p>Grow or Shrink Area: <?php echo $triangleArea->gos() ?></p>

    </body>
</html>