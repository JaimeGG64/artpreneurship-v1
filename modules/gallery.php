<?php

$style = "";
$classes = "";
$i = 0;
$repeater = $p['image_carousel'];

?>
<section class="gallery">
    <h2 class="gallery__heading"><?php echo $p['gallery_headline']; ?></h2>
    <div id="photo-gallery" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <?php if ($repeater) : ?>
                <?php foreach ($p['image_carousel'] as $value) : ?>
                    <?php if ($i++ == 0) : ?> 
                            <div class="carousel-item active">
                    <?php else : ?>
                            <div class="carousel-item">
                    <?php endif; ?>
                        <img class="d-block img-fluid w-100" 
                            src="<?php echo $value['carousel_image']['url']; ?>" 
                            alt="<?php echo $value['carousel_image']['alt']; ?>"/>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a class="carousel-control-prev" href="#photo-gallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#photo-gallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>