<?php
    //  1 ft = .3 m and 1 in. = .025
    $foot = (int)$_POST['foot'];
    $inch = (int)$_POST['inch'];
    // convert foot and inch to meter and add them together
    $meter = ($foot * 0.3048) + ($inch * 0.0254);

    $target_dir = "/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
//    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Process Page for StepOne.html</title>
    </head>
    <body>
        <?php
            echo "Hello, " . $_POST['firstName'] . " " . $_POST['lastName'] . "! You are " . round($meter, 3) . " meters tall!" ;

            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
        ?>
    </body>
</html>
