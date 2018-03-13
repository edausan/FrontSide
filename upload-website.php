<?php 
    session_start();
    define('TITLE', 'Upload Website');
    $bodyClass = 'dashboard-page';
    include('dashboard-header.php');

    if(isset($_POST['logout'])) {
        session_destroy();
        $url =    'admin_fs';
        header('location:' .$url);
    }

    if (array_key_exists('username',$_SESSION) && !empty($_SESSION['username'])) {
?>

<section class="fs-container-fluid">
    <article class="fs-row">

        <?php include('include/dashboard-nav.php'); ?>
        
        <?php include('include/upload-web.php'); ?>
        
    </article>
</section>


<?php } else { 

    $url =    'admin_fs';
    header('location:' .$url); } 
?>

<?php 
    include('footer.php');
?>