<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo TITLE; ?> | FrontSide Solutions</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/fslogo2.png" type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="<?php echo $bodyClass; ?>">

<?php 
    $class = ' '; 
    include('arrays.php'); 
    include('include/navbar.php'); 
?>
<section class="fs-container-fluid">
    <button id="nav-btn-trig" type="button"><i class="fa fa-bars"></i></button>
    <article class="fs-row">

        <section class="header clear">
            <!-- <?php include('include/logo.php'); ?> -->
            <!-- <?php include('include/navbar.php'); ?> -->
        </section>