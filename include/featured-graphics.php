<?php 
    include('db/db-connect.php');
    $sql = "SELECT * FROM fs_graphics ORDER BY id DESC LIMIT 4";
    $result = $mysqli->query($sql);

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

                <section class="featured-graphics-wrapper">
                    <h3 class="home-title featured-title">Latest Graphics</h3>
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
                </section>
            </article>
        </section>
            
    
    <?php } else {
        echo "0 results";
    }
    $mysqli->close();
