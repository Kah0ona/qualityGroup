<?php
/*
Template Name: Diensten
*/
?>
<?php get_header(); ?>

	<div class="u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--leftsidebar u-gridCol8" id="post-<?php the_ID(); ?>">
				<h4><?php the_title(); ?></h4>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
			<article class="Content Content--rightsidebar u-gridCol4" >
				<h4>Informatieverzoek</h4>
				<div>
					<?php get_sidebar(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>