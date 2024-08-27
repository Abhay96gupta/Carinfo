<?php

    $mysqli = new mysqli("localhost", "root", "", "testing");

    //check connection

    if(@$mysqli -> connect_error){
        echo "Failed to connect to mysql : " . $mysqli -> connect_error;
        exit();
    }

?>