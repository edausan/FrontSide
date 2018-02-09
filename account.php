<?php 
    session_start();
    define('TITLE', 'Account Settings');
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

        <section class="fs-container">
            <article class="fs-row">
                <h1>Account Settings</h1>

                <?php include('include/account-settings.php'); ?>
            </article>
        </section>
        

    </article>
</section>


<?php } else { 

$url =    'admin_fs';
header('location:' .$url); } 
?>

<?php 
include('footer.php');
?>