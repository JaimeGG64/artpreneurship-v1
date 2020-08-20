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
			// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$artpreneurship_v1_description = get_bloginfo( 'description', 'display' );
			if ( $artpreneurship_v1_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $artpreneurship_v1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'artpreneurship-v1' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'artpreneurship-v1' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'artpreneurship-v1' ), 'artpreneurship-v1', '<a href="http://Kyle%20Chan">Jaime Garcia</a>' );
				echo $year;
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
