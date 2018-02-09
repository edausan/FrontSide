<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "frontside";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        $servername = "sql210.epizy.com";
        $username   = "epiz_21467689";
        $password   = "frontside";
        $dbname     = "epiz_21467689_frontside";

        $mysqli = new mysqli($servername, $username, $password, $dbname);
        
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
    }
    
?> 