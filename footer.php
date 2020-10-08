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

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php
		$year = date("Y");
		$artpreneurship_v1_description = get_bloginfo('description', 'display');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<footer class="footer-wrapper">
	<section class="footer-wrapper__info">
		<?php the_custom_logo(); ?>
		<p class="footer-wrapper__info--address">Northridge, CA, 91330</p>
		<section class="footer-wrapper__info--contact"><a href="tel:8183995099" class="footer-wrapper__info--contact-phone">(818) 399-5099</a><br><a href="mailto:dave.moon@ixla.org?subject=Information About the Artpreneurship Program" class="footer-wrapper__info--contact-email">info@artpreneurship.com</a></section>
	</section>
	<section class="footer-wrapper__copyright">
		<section class="footer-wrapper__copyright--logos"><a href="#"><img alt="Link to Facebook." src="img/facebook.svg" class="footer-wrapper__copyright--logos-facebook"></a><a href="#"><img alt="Link to Twitter." src="img/twitter.svg" class="footer-wrapper__copyright--logos-twitter"></a><a href="#"><img alt="Link to Instagram." src="img/instagram.svg" class="footer-wrapper__copyright--logos-instagram"></a>
		</section>
		<p class="footer-wrapper__copyright--copy">© Copyright <?php echo $year ?>. Artpreneurship All Rights Reserved</p>
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
printf(esc_html__('Theme: %1$s by %2$s.', 'artpreneurship-v1'), 'artpreneurship-v1', '<a href="http://Kyle%20Chan">Jaime Garcia</a>');
?>
		<?php endif; ?>
	</section>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>