<?php   

$punit_theme = wp_get_theme();

if ( ! isset( $content_width ) )
	$content_width = 625;

/* Add files */

 
require_once( get_template_directory() . '/inc/punit-customizer.php' );     

add_action( 'after_setup_theme', 'punit_cstom' );

function punit_cstom() {


	load_theme_textdomain( 'punit', get_template_directory() . '/languages' );


	$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	);

	add_theme_support( 'custom-header', $defaults );

	add_theme_support( 'title-tag' );

	add_editor_style();

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 );

}

/*       adding style sheet in theme     */

function ribosome_scripts_styles() {

	wp_enqueue_style('font-awesome', get_template_directory_uri() .'/css/font-awesome-4.4.0/css/font-awesome.min.css');
	wp_enqueue_style('style', get_template_directory_uri() .'/style.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}

add_action( 'wp_print_styles', 'ribosome_scripts_styles' );

/* Add sidebar */

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Homepage Sidebar',
'id' => 'homepage-sidebar',
'description' => 'Appears as the sidebar on the custom homepage',
'before_widget' => '<div class="widget_gap_box"></div><li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}
add_action( 'widgets_init', 'register_sidebar' );
/* add comment template */

if ( ! function_exists( 'punit_comments' ) ) :

function punit_comments( $comment , $args , $depth ) {
	$GLOBALS['comment'] = $comment ;
	switch( $comment->comment_type ) :
	case 'pingback' :
	case 'trackback' :
?>	

<li><?php comment_class(); ?> id="comment-<?php comment_id(); ?>">
<p> 
	<?php _e('pingback','punit'); ?> 
	<?php comment_author_link( ); ?>
	<?php edit_comment_link(__('edit','punit'),'<span>','</span>'); ?>

</p>

<?php 

	break;
	default :
	global $post;

?>

<li <?php comment_class(); ?> id="li-comment-<?php comment_id(); ?>" >

<article id="comment-<?php comment_id(); ?>">
	<header>
		<?php echo get_avatar($comment,44); ?>

		<?php printf( '<cite> <b> %1$s </b> %2$s </cite>',get_comment_author_link(),
			($comment->user_id == $post ->post_author) ? '<span>'.__('post author','punit').'</span>':''
			);
		?><br>
		<?php printf( '<a href="%1$s" <time datetime=" %2$s "> %3$s </time></a>',
			esc_url(get_comments_link($comment ->comment_ID )),get_comment_time('c'),
				sprintf(__('%1$s at %2$s','punit'),get_comment_date(),get_comment_time() )  ); 
		?>

	</header>
	
<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'punit' ); ?></p>
			<?php endif; ?>

			<section class="comment-content ">
				<?php comment_text(); ?>
				
			</section><!-- .comment-content -->

			<div class="reply_edit">
				<div class="comment-editlink">
				<?php edit_comment_link( __( 'Edit', 'punit' ), '<p class="edit-link">', '</p>' ); ?>
				</div>
				<div class="reply">

				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'punit' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;


if ( ! function_exists( 'ribosome_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Ribosome 1.0
 */
function ribosome_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'punit' ); ?></h3>
			<div class="wrapper-navigation-below">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'punit' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'punit' ) ); ?></div>
			</div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;

?>





