<?php 

    include('db-connect.php');
    $sql = "SELECT * FROM fs_graphics";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $results = array();

        while ($res = $result->fetch_assoc())
        {
            $results[] = $res;
            rsort($results);
            
        } 

        echo json_encode($results);
    }

