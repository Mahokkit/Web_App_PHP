<?php
    include_once("circle.php");
    include_once("square.php");
    include_once("triangle.php");

    $circleArea = new circle($_POST['radius'], $_POST['gos']);
    $squareArea = new square($_POST['length'], $_POST['width']);
    $triangleArea = new triangle($_POST['height'],$_POST['base'], $_POST['gos']);

    $circleArea->CalculateArea();
    $radius = $circleArea->gos();

    $length = $_POST['length'];
    $width = $_POST['width'];

    $base = $_POST['base'];

    $triangleArea->CalculateArea();
    $height = $triangleArea->gos();

    $gos = $_POST['gos']; //gos = Grow or Shrink, if it's over 100 than grow, if it's below 100, then shrink.

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
                <input type="number" name="radius" id="radius" step="any" value="<?php echo $radius ?>"/>
            </fieldset>

            <fieldset>
                <legend>Rectangle</legend>
                <label>Length: </label><input type="number" name="length" step="any" value="<?php echo $length ?>"/>
                <label>Width: </label><input type="number" name="width" step="any" value="<?php echo $width ?>"/>
            </fieldset>

            <fieldset>
                <legend>Triangle</legend>
                <label>Base: </label><input type="number" name="base" step="any" value="<?php echo $base ?>" />
                <label>Height: </label><input type="number" name="height" step="any" value="<?php echo $height ?>"/>
            </fieldset>
            <br>
            <label>Grow or Shrink: <input type="number" step="any" name="gos"/> % </label>
            <input type="submit" id="insert" value="Calculate" name="Calculate"/>

        </form>
    <br>

        <p> Result </p>
        <h3>Shape: Circle</h3>
        <p>Area: <?php echo $circleArea->CalculateArea() ?></p>
<!--        <p>Radius: --><?php //echo $circleArea->gos() ?><!--</p>-->
                      
        <h3>Shape: Square</h3>
        <p>Area: <?php echo $squareArea->CalculateArea() ?></p>
                
        <h3>Shape: Triangle</h3>
        <p>Area: <?php echo $triangleArea->CalculateArea() ?></p>
    </body>
</html>