<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
				<aside class="u-gridCol4 app-aside">
					<h4><?php the_title(); ?></h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png" class="App-iphone" />
				</aside>
				<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					<a href="#">Download de app hier</a>
					<img class="google-play" src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" />
					<img class="qr-code" src="<?php echo get_stylesheet_directory_uri(); ?>/img/quality_groep_qr_code.jpg" />
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


