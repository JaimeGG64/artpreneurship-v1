<?php

$style = "";
$classes = "";

?>
<section class="goals">
    <div class="goals__text-wrapper">
        <h1 class="goals__headline"><?php echo $p['headline']; ?></h1>
        <p class="goals__copy"><?php echo $p['paragraph']; ?></p>
        <ul class="goals__list">
            <?php foreach ($p['list'] as $value) { ?>
                <li class="goals__list-item">
                    <img class="goals__list-item-icon" src="<?php echo $p['list_icon']['url']; ?>" alt="<?php echo $p['list_icon']['alt']; ?>">
                    <?php echo $value['list_item']; ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <img class="goals__image" src="<?php echo $p['illustration']['url']; ?>" alt="<?php echo $p['illustration']['alt']; ?>">
</section>