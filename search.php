<?php get_header() ;?>

<div class="main">

<?php if( have_posts()) : ?>

	<h1 class="title center">
		<?php printf(__('Query : %s','punit'),get_search_query());?>
	</h1>
	<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
<?php else : ?>	

	<h1 class="entry-title"><?php _e( 'Nothing Found', 'punit' ); ?></h1>
	<?php get_search_form(); ?>
	
<?php endif ; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>