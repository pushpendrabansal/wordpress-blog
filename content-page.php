<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Ribosome
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h1 class="center title"><?php the_title(); ?></h1>
		

		<div class="entry-content">
			<?php the_content(); ?>
			
		</div>
		
	</article><!-- #post -->
