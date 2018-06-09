<!--  Main image     -->

<?php get_header(); ?>

<div class="main">
	<?php if ( have_posts() ) : ?>

			<?php while (have_posts()) :the_post(); { ?>
			
				<?php get_template_part( 'content', get_post_format() ); ?>

	<?php		}endwhile; ?>


	<?php  else : ?>
			
		<?php if(current_user_can('edit_posts')): ?>

			<p class="title">No post yet </p>
			<p class="content">
			<?php	printf(__('Ready to <a href="%s"> Create post</a>','punit'),admin_url('post-new.php'));
			?>
			</p>

		<?php	else : ?>

			<p class="title">Its look like no post yet</p>
				
	<?php	endif; ?>
	
	<?php endif;?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>