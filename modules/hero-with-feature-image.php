<?php 

$style = "";
$classes = $p['content_order'] == 'image-content' ? 'hero-with-feature-image__image-wrapper--img-content' : '' ;

$heading_level = $p['heading_level'];
?>
<section class="hero-with-feature-image">
    <div class="hero-with-feature-image__text-wrapper">
        <?php echo "<" . $heading_level . ">" . $p['headline'] . "</" . $heading_level . ">"; ?>
        <?php echo $p['description']; ?>
        <?php
            switch ($p['feature_button']) {
                case "donation-and-sponsorship":
                    wp_nav_menu(
                        array(
                            'menu' => 'Donation & Sponsorship',
                        )
                    );
                    break;
                case "collaborators":
                    wp_nav_menu(
                        array(
                            'menu' => 'Collaborators',
                        )
                    );
                    break;
                case "awards":
                    wp_nav_menu(
                        array(
                            'menu' => 'Award Application',
                        )
                    );
                    break;
            }
        ?>
    </div>
    <div class="hero-with-feature-image__image-wrapper <?php echo $classes ?>">
        <?php the_post_thumbnail(); ?>
    </div>
</section> 