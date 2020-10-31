<?php 

$style = "";
$classes = $p['content_order'] == 'image-content' ? 'hero-with-feature-illustration--img-content' : 'hero-with-feature-illustration--content-img' ;
$classes .= ' ' . 'hero-with-feature-illustration--' . $p['content_width'];


$heading_level = $p['heading_level'];
?>
<section class="hero-with-feature-illustration <?php echo $classes ?>">
    <?php echo '<' . $heading_level . ' class="hero-with-feature-illustration__headline">' . $p['headline'] . '</' . $heading_level . '>'; ?>
    <img class="hero-with-feature-illustration__illustration" src="<?php echo $p['feature_image']['url']; ?>" alt="<?php echo $p['feature_image']['alt']; ?>"/>
    <div class="hero-with-feature-illustration__text-wrapper">
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
</section> 