<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Artpreneurship_v1
 */

?>

<?php 
	$sm = get_field('social_media', 'option');
	$year = date("Y");

	function trim_social_media_name($socialMediaName) {
		$faPosition = 3;
		$trimOffFistPart = substr($socialMediaName, $faPosition);
		if(strpos($trimOffFistPart, '-')){
			$dashPositon = strpos($trimOffFistPart, '-');
			$formatedName = substr($socialMediaName, $faPosition, $dashPositon);
			return $formatedName;
		}
		else{
			return $trimOffFistPart;
		}
	} 
?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php
		$artpreneurship_v1_description = get_bloginfo('description', 'display');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<footer class="footer">
	<div class="footer__info">
		<?php the_custom_logo(); ?>
		<?php dynamic_sidebar('contact-sidebar') ?>
	</div>
	<section class="footer__copyright">
		<?php if($sm) : ?>
			<div class="footer__social-media-icons">
				<h2 class="sr-only">Social Media</h2>
				<?php foreach($sm as $s) { ?>
					<a href="<?php echo $s['social_media_url'] ?>" target="_blank" rel="nofollow">
						<span class="sr-only"> Artpreneurship <?php echo trim_social_media_name($s['social_media_icon_name']) ?> </span>
						<i class="fab <?php echo $s['social_media_icon_name'] ?>"></i>
					</a>
				<?php } ?>
			</div>
		<?php endif ?>
		<p class="footer__copyright-text">© Copyright <?php echo $year ?>. Artpreneurship All Rights Reserved</p>
		<?php
		if (is_customize_preview()) :
		?>
			<p class="site-description"><?php echo $artpreneurship_v1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
										?></p><a href="<?php echo esc_url(__('https://wordpress.org/', 'artpreneurship-v1')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf(esc_html__('Proudly powered by %s', 'artpreneurship-v1'), 'WordPress');
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'artpreneurship-v1'), 'artpreneurship-v1', '<a href="https://github.com/JaimeGG64">Jaime Garcia</a> and <a href="https://github.com/kylechan19">Kyle Chan</a>');
			?>
		<?php endif; ?>
	</section>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>