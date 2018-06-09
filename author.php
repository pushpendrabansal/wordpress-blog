<?php    get_header() ;    ?>

<div class="main">


<?php if(have_posts()) :       ?>

<p class="center title">	<?php echo get_the_author_meta('display_name') ; ?></p>
	<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

<?php  else : ?>

	<?php get_template_part('content' , 'none') ; ?>	

<?php endif ; ?>




</div>



<?php get_sidebar(); ?>
<?php   get_footer() ;   ?>