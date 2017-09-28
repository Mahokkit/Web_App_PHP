<?php
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {

    $first = $_POST['firstname'];
    $last = $_POST['lastname'];


    $db = mysqli_connect("localhost","root", "inet2005","sakila");
    if (!$db)
    {
        die('Could not connect to the Sakila Database: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO actor.firstName, actor.lastName";
    $sql .= "";



mysqli_close($db);

}
