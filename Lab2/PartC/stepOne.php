<?php
    //  1 ft = .3 m and 1 in. = .025
    $foot = (int)$_POST['foot'];
    $inch = (int)$_POST['inch'];
    // convert foot and inch to meter and add them together
    $meter = ($foot * 0.3048) + ($inch * 0.0254);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Process Page for StepOne.html</title>
    </head>
    <body>
        <?php
        echo "Hello, " . $_POST['firstName'] . " " . $_POST['lastName'] . "! You are " . round($meter, 3) . " meters tall!" ;
        ?>
    </body>
</html>