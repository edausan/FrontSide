<?php 
    define('TITLE', 'Graphic Designs');
    $bodyClass = 'graphics-page';
    include('header.php');

    $banner = 'banner-2';
    $title  =  'Graphic Designs';
    include('include/banner_small.php');
    include('db/db-graphics-table.php');
    
        
    if ($result->num_rows > 0) {
        // output data of each row
        $results = array();

        while ($res = $result->fetch_assoc())
        {
            $results[] = $res;
            rsort($results);
        } ?>
        
        <section class="fs-container">
            <article class="fs-row">
                <ul class="graphics-wrapper" style="padding: 100px 20px;">
            
                    <?php foreach ($results as $result) : ?>
                        <li>
                            <div class="thumbnail-wrapper">
                                
                                <figure class="thumbnail-container">
                                    <img class="thumbnail" src="<?php echo $result['path']; ?>" alt="<?php echo $result['title']; ?>" title="<?php echo $result['description']; ?>">
                                </figure>
                                <div class="caption"><?php echo $result['title']; ?></div>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </article>
        </section>
            
    
    <?php } else {
        echo "0 results";
    }
    $mysqli->close();
?>

<?php include('footer.php'); ?>