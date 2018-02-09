<!DOCTYPE html>
<?php
    session_start();
    
    include('db/db-connect.php');

    if (array_key_exists('username',$_SESSION) && !empty($_SESSION['username'])) {
        $url =    'dashboard';
        header('location:' .$url);
    } else {
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin | FrontSide</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/fslogo2.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

</head>
<body>

    <section class="fs-container-fluid">

        <article class="fs-row">

            <section class="login-wrapper">
                

                <article class="form-wrapper">
                    
                    <a href="home">
                        <figure class="logo-wrapper"><img src="images/fslogo2.png" alt=""></figure>
                    </a>
                    

                    <?php
                        if (isset($_POST['signin'])) {

                            $username   =   $_POST['username'];
                            $password   =   $_POST['password'];

                            $sql = "SELECT * FROM fs_admin";
                            $result = $mysqli->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // output data of each row

                                while($row = $result->fetch_assoc()) {

                                    if ($username == $row['username'] && $password == $row['password']) {
                                        $_SESSION['username']   =   $username;
                                        $_SESSION['password']   =   $password;
                                        $_SESSION['fname']      =   $row['fname'];
                                        $_SESSION['lname']      =   $row['lname'];
                                        $_SESSION['dp_path']    =   $row['dp_path'];

                                        $newURL = 'dashboard';
                                        header('Location: '.$newURL);
                                    } else {
                                        echo '<p class="notification">Wrong Credentials</p>';
                                    }

                                }
                                
                            } else {
                                echo "0 results";
                            }
                            $mysqli->close();
                        }
                    ?>

                    
                    

                    <form action="" method="post" class="login-form">

                        <div class="field-wrapper" id="username-field">
                            <span><i class="fa fa-user-o"></i></span>
                            <input class="form-field" name="username" id="username" type="text" placeholder="Username" required>
                        </div>

                        <div class="field-wrapper" id="password-field">
                            <span><i class="fa fa-lock"></i></span>
                            <input class="form-field" name="password" id="password" type="password" placeholder="Password" required>
                        </div>

                        <button name="signin" class="submit-btn" id="sign-in-btn">Sign In</button>

                    </form>

                    

                </article>

                <p class="copyright">Copyright © <?php echo date('Y'); ?> FrontSide Solutions. All rights reserved.</p>

                

            </section>

        </article>

    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="scripts/admin.js"></script>
</body>
</html>

<?php } ?>