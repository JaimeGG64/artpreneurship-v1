<?php

$style = "";
$classes = "";

$repeater = $p['collaborator_container'];
$sorted = array();

foreach ($repeater as $i => $sortBy) {
    $sorted[$i] = $sortBy['name'];
}

array_multisort($sorted, SORT_ASC, $repeater);

?>
<section class="collab-list-section">
    <?php if ($repeater) : ?>
        <dl class="collab-list-section__list">
            <?php foreach ($repeater as $i => $display) : ?>
                <div class="collab">
                    <img class="collab__image" src="<?php echo $display['profile_picture']['url']; ?>" alt="<?php echo $display['profile_picture']['alt']; ?>">
                    <dt class="collab__name"><?php echo $display['name']; ?></dt>
                    <dd class="collab__desc"><?php echo $display['job_title']; ?></dd>
                </div>
            <?php endforeach; ?>
        </dl>
    <?php endif; ?>
</section>