<?php
/*
Template Name: Child Menu
*/
?>
<?php get_header(); ?>

<div class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<?php while ( have_posts() ): the_post(); ?>
	
	<article <?php post_class(); ?>>	
		
		<div class="post-wrapper group">
			<div class="entry-content">
				<div class="entry themeform">
					<?php the_content(); ?>
					<div class="clear"></div>
				</div><!--/.entry-->
			</div>
			<div class="entry-footer group">
				<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
			</div>
		</div>

	</article><!--/.post-->	
	
	<?php endwhile; ?>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>