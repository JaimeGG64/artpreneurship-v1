<?php
$style = "";
$classes = "";
?>

<section class="partner_module">
    <?php echo $p['wysiwyg_editor'] ?>
    <?php if ($p['organization_link']) : ?>
            <a href="<?php echo $p['organization_link'] ?>" target="_blank" class="partner_module__btn"><?php echo $p['link_text'] ?></a>
    <?php endif; ?> 
</section>