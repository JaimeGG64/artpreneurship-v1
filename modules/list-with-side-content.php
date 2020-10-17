<?php

$style = "";
$classes = "";

$repeater = $p['list'];

?>
<section class="curricula">
    <div class="curricula__copy-wrapper">
        <h2 class="curricula__heading"><?php echo $p['headline']; ?></h2>
        <?php echo $p['content']; ?>
    </div>
    <?php if ($repeater) : ?>
        <dl class="curricula__list">
            <?php foreach ($repeater as $i => $display) : ?>
                <div class="curricula__list-item-wrapper">
                    <dt class="curricula__list-term"><?php echo $display['list_heading']; ?></dt>
                    <dd class="curricula__list-def"><?php echo $display['list_description']; ?></dd>
                    <img class="curricula__list-icon" 
                        src="<?php echo $display['list_icon']['url']; ?>" 
                        alt="<?php echo $display['list_icon']['alt']; ?>"/>
                </div>
            <?php endforeach; ?>
        </dl>
    <?php endif; ?>
</section>