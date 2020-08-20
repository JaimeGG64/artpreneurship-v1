<?php

$style = "";
$classes = "";

?>
<section class="collab-list-section">
    <dl class="collab-list-section__list">
        <?php foreach ($p['collaborator_container'] as $value) { ?>
            <div class="collab">
                <dt class="collab__name"><?php echo $value['name']; ?></dt>
                <dd class="collab__desc"><?php echo $value['job_title']; ?></dd>
                <img class="collab__image" src="<?php echo $value['profile_picture']['url']; ?>" alt="<?php echo $value['profile_picture']['alt']; ?>">
            </div>
        <?php } ?>
    </dl>
</section>