<?php 
    define('TITLE', 'Home');
    $bodyClass = 'home-page';
    include('header.php');
?>

<?php 
    // including banner
    $banner = 'banner-1';
    $title  =  'FrontSide Solutions';
    include('include/banner.php');
?>

<section class="fs-container">
    <article class="fs-row">
    
    <?php 
        // including services overview
        include('include/featured-graphics.php');
        // include('include/services-overview.php');
    ?>
    
    </article>
</section>


<?php 
    // including footer
    include('footer.php');
?>