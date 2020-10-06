<?php

$style = "";
$classes = "";

$repeater = $p['list'];

?>
<section class="required-items">
    <h2 class="required-items__heading"><?php echo $p['headline']; ?></h2>
    <img class="required-items__image" 
        src="<?php echo $p['illustration']['url']; ?>" 
        alt="<?php echo $p['illustration']['alt']; ?>"/>
    <?php if ($repeater) : ?>
        <dl class="required-items__list">
            <?php foreach ($repeater as $i => $display) : ?>
                <div class="required-items__list-item">
                    <dt class="required-items__list-item-term"><?php echo $display['list_heading']; ?></dt>
                    <dd class="required-items__list-item-def"><?php echo $display['list_description']; ?></dd>
                    <img class="required-items__list-item-icon" 
                        src="<?php echo $p['list_icon']['url']; ?>" 
                        alt="<?php echo $p['list_icon']['alt']; ?>"/>
                </div>
            <?php endforeach; ?>
        </dl>
    <?php endif; ?>
</section>