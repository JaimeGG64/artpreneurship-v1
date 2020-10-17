<?php

/**
*  Template Name: Page Builder
*/

$logo = get_field('logo','option');
$pb = get_field('page_builder');

if (!$pb) { ?>

	<?php get_header();  ?>

	<main>
		<tr>
			<td>
				<h1>Coming soon!</h1>
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
			</td>
		</tr>
	</main>

<?php } else if($pb) { 

	get_header('1'); 
    ?>
    <main>
    <?php
	foreach($pb as $p) {
        $module = $p["acf_fc_layout"];
		$module = str_replace('_', '-', $module);
        include(locate_template('/modules/' . $module .'.php'));
    }
}
?>
</main>

<?php

get_footer();  

?>