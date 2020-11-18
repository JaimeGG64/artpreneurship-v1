<?php
$style = "";
$classes = "";
?>

<style>
    <?php if ($p['mobile_background']['url']) : ?>
    .text-section-bg {
        background-image: url("<?php echo $p['mobile_background']['url'] ?>");
    }
    <?php endif ?>
    
    <?php if ($p['tablet_background']['url']) : ?>
    @media screen and (min-width: 768px) {
        .text-section-bg {
            background-image: url("<?php echo $p['tablet_background']['url'] ?>");
        }
    }
    <?php endif ?>
    
    <?php if ($p['tablet_background']['url']) : ?>
    @media screen and (min-width: 1024px) {
        .text-section-bg {
            background-image: url("<?php echo $p['large_background']['url'] ?>");
        }
    }
    <?php endif ?>
    <?php if ($p['tablet_background']['url']) : ?>
    @media screen and (min-width: 1280px) {
        .text-section-bg {
            background-image: url("<?php echo $p['extra_large_background']['url'] ?>");
        }
    }
    <?php endif ?>
</style>

<section class="text-section text-section-bg">
    <h2 class="text-section__heading">
        <?php echo $p['text_section_headline'] ?></h2>
    <?php
    echo $p['text_section_copy']
    ?>
    <?php if ($p['feature_button'] != 'none') : ?>
        <a href="<?php echo $p['page_link']['url'] ?>" class="text-section__link text-section__link--<?php echo $p['feature_button_color'] ?>"><?php echo $p['link_text'] ?></a>
    <?php endif; ?>
</section>