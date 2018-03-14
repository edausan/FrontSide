<?php 
    include('db/db-connect.php');
    $sql = "SELECT * FROM fs_graphics";
    $result = $mysqli->query($sql);