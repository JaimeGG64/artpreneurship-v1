<?php

$style = "";
$classes = "";

$repeater = $p['list'];

?>
<section class="checklist-with-illustration">
    <h2 class="checklist-with-illustration__heading"><?php echo $p['headline']; ?></h2>
    <p class="checklist-with-illustration__first-paragraph"><?php echo $p['first_paragraph']; ?></p>
    <?php if ($repeater) : ?>
        <ul class="checklist-with-illustration__list">
            <?php foreach ($repeater as $i => $display) : ?>
                <li class="checklist-with-illustration__list-item">
                    <?php echo $display['list_description']; ?>
                    <img class="checklist-with-illustration__list-item-icon" src="<?php echo $p['list_icon']['url'] ?>" alt="<?php echo $p['list_icon']['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if ($p['second_paragraph']) : ?>
        <p class="checklist-with-illustration__second-paragraph"><?php echo $p['second_paragraph']; ?></p>
    <?php endif; ?>
    <img class="checklist-with-illustration__image" src="<?php echo $p['illustration']['url'] ?>" alt="<?php echo $p['illustration']['alt']; ?>" />
</section>