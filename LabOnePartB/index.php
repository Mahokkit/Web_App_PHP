<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 9/12/17
 * Time: 8:11 AM
 */

$name = "Edward Ma";
$blastoff = array(10,9,8,7,6,5,4,3,2,1,"blast off!");
$colours = array("Red","Orange","Teal","Blue","Green","Purple","Grey");
?>



<html>
    <header>
        <title>Lab One Part B</title>
    </header>

    <body>
        <p>
            <?php
            echo "<h1>Greeting From Lab One</h1> \n" . "My name is " . $name;
            echo "<br>Answer to Step 4 A is " . ((32*14)+83) . "!" .
                "<br>Answer to Step 4 B is " . ((1024/128)-7) . "!" .
                "<br>Answer of Step 4 C is " . (769%6). "!";
            ?>
        </p>
        <p>
            <h3>Step 5 & 6...loooops!</h3>
            <?php
                foreach ($blastoff as $value)
                {
                    echo "$value <br>";
                }
            ?>
        </p>

    </body>
</html>
