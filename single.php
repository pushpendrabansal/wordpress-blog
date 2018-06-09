<?php get_header(); ?>

	<div id="primary" class="site-content main">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
					
					<div class="links">
					<span class="previous_postlink"><?php previous_post_link( '%link', '<span>' . _x( '&larr;','punit') . '</span> %title' ); ?></span>
					<span class="next_postlink"><?php next_post_link( '%link', '%title <span>' . _x( '&rarr;', 'punit' ) . '</span>' ); ?></span>
					</div>
			
				<?php comments_template( '', true ); ?>

			<?php endwhile;  ?>

		</div>
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>