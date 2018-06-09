<?php get_header() ;?>

<div class="main">
	
	<?php if(have_posts()) : ?>

		<h1 class="title center"><?php printf(__('Tag Archives : %s','punit'),single_tag_title('',false)) ;?></h1>

		<?php if(tag_description()) : ?>

			<p><?php echo tag_description() ; ?></p>

		<?php endif ; ?>	

		<?php while( have_posts () ) : the_post() ; ?>

			<?php get_template_part('content',get_post_format()); ?>

		<?php endwhile ; ?>
			
	<?php else :?>
	
		<?php get_template_part('content','none') ;?>

	<?php endif ;?>	

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>