<?php

$style = "";
$classes = "";

$repeater = $p['list'];

?>
<section class="goals">
    <h2 class="goals__heading"><?php echo $p['headline']; ?></h2>
    <p class="goals__copy"><?php echo $p['paragraph']; ?></p>
    <img class="goals__image" src="<?php echo $p['illustration']['url']; ?>"/>
    <?php if ($repeater) : ?>
        <ul class="goals__list">
            <?php foreach ($repeater as $i => $display) : ?>
                <li class="goals__list-item">
                    <?php echo $display['list_description']; ?>
                    <img class="goals__list-item-icon" 
                        src="<?php echo $p['list_icon']['url']; ?>" 
                        alt="<?php echo $p['list_icon']['alt']; ?>"/>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>