<div class="comment">

	
	<?php if ( have_comments() ) : ?>
		<h2>
			<?php
				printf( __('%1$s thoughts on &ldquo;%2$s&rdquo;', 'punit' ),
					get_comments_number() , '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol >
			<?php wp_list_comments( array( 'callback' => 'punit_comments', 'style' => 'ol' ) ); ?>
		</ol>

		
		<nav>
			
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'punit' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'punit' ) ); ?></div>
		</nav>
		


	<?php endif; ?>
	<div class="comment-form" id="respond">
	<?php comment_form(); ?>
	</div>

</div>