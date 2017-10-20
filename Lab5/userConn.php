<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/20/17
 * Time: 19:21
 */
//for step 3
function getDbConnection()
{
    $conn = mysqli_connect("localhost", "empUser", "inet2005", "employees");
    if(!$conn)
    {
        die("Unable to connect to database: " . mysqli_connect_error());
    }

    return $conn;
}