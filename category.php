<?php get_header() ; ?>
<div class="main"> 

<?php if(have_posts()) : ?>

	<h1 class="title center"><?php printf(__('Archive : %s','punit'),single_cat_title('',false)) ; ?></h1>

	<?php if(category_description()) : ?>

		<p><?php echo category_description() ; ?></p>
		
	<?php endif ;?>	

	<?php while( have_posts() ) : the_post() ;

		get_template_part( 'content', get_post_format() );
		

			endwhile;
	?>
			
<?php  else : ?>

	<?php get_template_part('content','none'); ?>

<?php endif ; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer() ; ?>