<?php
$style = "";
$classes = "";
?>

<section class="feature-illustration-with-logo">
    <div class="feature-illustration-with-logo__text-wrapper">
        <?php the_custom_logo(); ?>
        <h1 class="feature-illustration-with-logo__heading"><?php echo $p['headline']; ?></h1>
        <p class="feature-illustration-with-logo__copy">
            <?php echo $p['paragraph']; ?>
        </p>
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'Donation & Sponsorship',
                )
            );
        ?>
    </div>
    <img src="<?php echo $p['illustration']['url']; ?>" alt="<?php echo $p['illustration']['alt']; ?>" class="feature-illustration-with-logo__illustration"/>
</section>