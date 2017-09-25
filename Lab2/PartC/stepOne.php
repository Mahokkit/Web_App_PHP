<?php
    //  1 ft = .3 m and 1 in. = .025
    $foot = (int)$_POST['foot'];
    $inch = (int)$_POST['inch'];
    // convert foot and inch to meter and add them together
    $meter = ($foot * 0.3048) + ($inch * 0.0254);

    $uploads_dir = 'uploads/';
    $fileTmpName = $_FILES['userImage']['tmp_name'];
    $fileOrigName = $_FILES['userImage']['name'];
    $fileSize = $_FILES['userImage']['size'];
    $fileUploadError = $_FILES['userImage']['error']; // 0 means success

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Process Page for StepOne.html</title>
    </head>
    <body>
        <?php
            echo "Hello, " . $_POST['firstName'] . " " . $_POST['lastName'] . "! You are " . round($meter, 3) . " meters tall!" ;

            if(isset($fileOrigName)){
                if (!empty($fileOrigName)){
                    echo"<p>File is ok</br>";
                    echo "<p>Tmp: ".$fileTmpName."</p>";
                    echo "<p>Orig: ".$fileOrigName."</p>";
                    echo "<p>Size: ".$fileSize."</p>";
                    echo "<p>Error ".$fileUploadError."</p>";

                    if (move_uploaded_file($fileTmpName,"$uploads_dir/.$fileOrigName")){
                        echo "<p>File Uploaded</p>";
                    }
                    else{
                        echo "<p>Upload failed</p>";
                    }
                }
                else{
                    echo "<p> Please Choose a file first</p>";
                }
            }
        ?>
    </body>
</html>
