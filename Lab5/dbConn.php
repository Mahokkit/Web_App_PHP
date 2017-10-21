<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 9/27/17
 * Time: 4:41 PM
 */
    //for step 3
    function getDbConnection()
    {
        $db = @mysqli_connect("localhost","empAdmin", "inet2005","employees");
        if (!$db)
        {
            die('Could not connect to the employees Database: ' . mysqli_error($db));
        }

        return $db;
    }