<?php get_header() ; ?>


<div class="main">
	<p class="center title">
	<?php if( have_posts()) : ?>

		<?php if( is_day() ) : 
			
					printf(__('daily archives %s','punit'), get_the_date()) ;

			  elseif(is_month()) :

			  		printf(__('monthly archives %s','punit'), get_the_date( _x( 'F Y', 'monthly archives date format', 'punit' ))) ; 
			  
			  elseif(is_year()) :
			  
			  		printf(__('yearly archives %s','punit'), get_the_date( _x('Y','yearly archives date format','punit'))) ;

			  else :
						_e( 'Archives', 'punit' );
			  			
			  endif; ?>
		</p>	  
		  <?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
		  ?>

			  
	<?php else : ?>

	<?php get_template_part('content','none') ; ?>	


	<?php endif ; ?>	

</div>









<?php get_sidebar(); ?>
<?php get_footer() ; ?>