<section class="services-overview">
    <ul>
        <?php
            foreach ($serviceIcons as $icon => $title) {
        ?>

            <li>
                <figure><img src="images/services-icons/<?php echo $icon; ?>.png" alt=""></figure>
                <label for=""><?php echo $title; ?></label>
            </li>

        <?php } ?>
    </ul>
</section>