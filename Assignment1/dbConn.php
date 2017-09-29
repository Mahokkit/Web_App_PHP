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
        $conn = mysqli_connect("localhost", "root", "inet2005", "employees");
        if(!$conn)
        {
            die("Unable to connect to database: " . mysqli_connect_error());
        }

        return $conn;
    }