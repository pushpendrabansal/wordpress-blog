<?php get_header(); ?>

	<div  class="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile;  ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>