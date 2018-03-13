<?php

    if (isset($_POST['submit'])) {
        $table = $_POST['table'];

        $target_dir = "images/graphics/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
    
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                $imgName    =   basename( $_FILES["fileToUpload"]["name"]);

                include('db/db-connect.php');

                if ($table == 'fs_graphics') {
                    $title  =   $_POST['title'];
                    $description  =   $_POST['description'];

                    $sql = "INSERT INTO $table (title, description, filename, path)
                    VALUES ('$title', '$description', '$imgName', '$target_file')";
                
                    if ($mysqli->query($sql) === TRUE) {
                        $newURL = 'dashboard.php';
                        header('location:' .$newURL);
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                } else {

                    $web_name = $_POST['website-name'];
                    $web_url = $_POST['website-url'];
                    $web_thumbname = $imgName;
                    $web_thumbnail = $target_file;

                    $sql = "INSERT INTO $table (web_name, web_url, web_thumbname, web_thumbnail)
                    VALUES ('$web_name', '$web_url', '$web_thumbname', '$web_thumbnail')";
                
                    if ($mysqli->query($sql) === TRUE) {
                        $newURL = 'dashboard.php';
                        header('location:' .$newURL);
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            
                $mysqli->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        

    }
    


?>
