<?php

$style = "";
$classes = "";

$repeater = $p['collaborator_container'];
$order = array();

foreach ($repeater as $i => $row) {
    $order[$i] = $row['name'];
}

array_multisort($order, SORT_ASC, $repeater);

?>
<section class="collab-list-section">
    <?php if ($repeater) : ?>
        <dl class="collab-list-section__list">
            <?php foreach ($repeater as $i => $row) : ?>
                <div class="collab">
                    <img class="collab__image" src="<?php echo $row['profile_picture']['url']; ?>" alt="<?php echo $row['profile_picture']['alt']; ?>">
                    <dt class="collab__name"><?php echo $row['name']; ?></dt>
                    <dd class="collab__desc"><?php echo $row['job_title']; ?></dd>
                </div>
            <?php endforeach; ?>
        </dl>
    <?php endif; ?>
</section>