<?php

    function checkIfLoggedIn()
    {
        session_start();
        if(empty($_SESSION['LoginUser'])) // || empty($_SESSION['LoginPwd']))
        {
            header("location:index.html");
        }
    }
