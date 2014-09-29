<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer contact-Wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>">
			<div class="Header-Banner-Left">
			<div class="Content-entry">
				<h4><?php the_title(); ?></h4>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Quality Groep B.V.</p>
								<p>Fornheselaan 90</p>
								<p>3734 GE Den Dolder</p>
								<p>Email: info@strijkenenschoonmaakservice.nl</p>
								<p>Tel: 0622185409</p>
							</div>
	
						</div>					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>

		</article>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>