<?php
$style = "";
$classes = "";
?>

<section class="text-section">
    <h2 class="text-section__heading">
        <?php echo $p['text_section_headline'] ?></h2>
    <?php 
        echo $p['text_section_copy']
    ?>
    <?php if ($p['feature_button'] != 'none') : ?>
        <a href="<?php echo $p['page_link']['url'] ?>" class="text-section__link text-section__link--<?php echo $p['feature_button_color'] ?>"><?php echo $p['link_text'] ?></a>
    <?php endif; ?>
</section>