<?php
    include_once("circle.php");
    include_once("square.php");
    include_once("triangle.php");

    $circleArea = new circle($_POST['radius'], $_POST['gos']);
    $squareArea = new square($_POST['length'], $_POST['width']);
    $triangleArea = new triangle($_POST['height'],$_POST['base']);



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
                <label>Length: </label><input type="number" name="length" step="any" value="<?php echo $length ?>"/>
                <label>Width: </label><input type="number" name="width" step="any" value="<?php echo $width ?>"/>
            </fieldset>

            <fieldset>
                <legend>Triangle</legend>
                <label>Base: </label><input type="number" name="base" step="any" value="<?php echo $base ?>" />
                <label>Height: </label><input type="number" name="height" step="any" value="<?php echo $height ?>"/>
            </fieldset>

            <input type="submit" id="insert" value="Calculate" name="Calculate"/>

        </form>

        <?php

            if(isset($_POST['Calculate']))
            {
                echo "  <p> Result </p>
                        <h3>Shape: Circle</h3>
                        <p>Area: " . $circleArea->CalculateArea() . "</p>
                
                        <h3>Shape: Square</h3>
                        <p>Area: " . $squareArea->CalculateArea() . "</p>
                
                        <h3>Shape: Triangle</h3>
                        <p>Area: " . $triangleArea->CalculateArea() ."</p>
                        <p>Grow or Shrink Area: " . $triangleArea->gos() . "</p>
                      ";
            }
        ?>



    </body>
</html>