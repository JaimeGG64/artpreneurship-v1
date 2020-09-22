<?php

$style = "";
$classes = "";

$repeater = $p['list'];

?>
<section class="program-feature">
    <h2 class="program-feature__heading"><?php echo $p['headline']; ?></h2>
    <p class="program-feature__copy"><?php echo $p['paragraph']; ?></p>
    <?php if ($repeater) : ?>
        <dl class="program-feature__list">
            <?php foreach ($repeater as $i => $display) : ?>
                <div class="program-feature__item-wrapper">
                    <a href="" class="program-feature__link">
                        <dt class="program-feature__term"><?php echo $display['list_heading']; ?></dt>
                        <dd class="program-feature__def"><?php echo $display['list_description']; ?></dd>
                        <img class="program-feature__icon" 
                            src="<?php echo $display['list_icon']['url']; ?>" 
                            alt="<?php echo $display['list_icon']['alt']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </dl>
    <?php endif; ?>
</section>