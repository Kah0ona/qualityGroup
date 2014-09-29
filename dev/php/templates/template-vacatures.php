<?php
/*
Template Name: vacatures
*/
?>
<?php get_header(); ?>
<div class="u-gridContainer contact-Wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>">
			<div class="Header-Banner-Left">
			<div class="Content-entry">
				<h4><?php the_title(); ?></h4>
						<div class="u-gridRow">						
						<p class="contact-page-p">Voor een open sollicitatie vult u hieronder het formulier in.</p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>

		</article>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>