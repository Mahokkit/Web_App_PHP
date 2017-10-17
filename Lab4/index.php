<?php
    include("circle.php");
    include("square.php");
    include("triangle.php");

    $radius = $_POST['radius'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $base = $_POST['base'];
    $height = $_POST['height'];
    $gos = $_POST['gos'];
//    $shrink = $_POST['shrink'];

    $circleArea = new circle($radius,$gos);
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
<!--        </form>-->

<!--        <form action="--><?php //$_SERVER['PHP_SELF']?><!--" method="POST" enctype="multipart/form-data">-->
<!--            <label>Grow By (%): </label><input type="number" name="gos" value="--><?php //echo $gos ?><!--" />-->
<!--            <input type="submit" id="grow" value="Grow" name="Grow" />-->
<!--        </form>-->
<!---->
<!--        <form action="--><?php //$_SERVER['PHP_SELF']?><!--" method="POST" enctype="multipart/form-data">-->
<!--            <label>Shrink By (%): </label><input type="number" name="shrink" max="100" value="--><?php //echo $shrink ?><!--" />-->
<!--            <input type="submit" id="shrink" value="Shrink" name="Shrink" />-->
        </form>

        <p> Result </p>

        <h3>Shape: Circle</h3>
        <p>Area: <?php echo $circleArea->CalculateArea() ?> </p>
        <p>Grow or Shrink Area: <?php echo $circleArea->gos() ?></p>

        <h3>Shape: Square</h3>
        <p>Area: <?php echo $squareArea->CalculateArea() ?> </p>

        <h3>Shape: Triangle</h3>
        <p>Area: <?php echo $triangleArea->CalculateArea() ?> </p>
        <p>Grow or Shrink Area: <?php echo $triangleArea->gos() ?></p>

    </body>
</html>