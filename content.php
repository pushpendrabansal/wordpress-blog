<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php if(is_single()) : ?>
<div class="post-header">
	<h1 class="title"><?php the_title() ; ?></h1>
		<div class="content_less_part">	
			<div class="authors"><i class="fa fa-user"></i>
				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID")));?>">
				 <?php the_author() ; ?>	
				</a>
			</div>
			<div class="calendar">
				<i class="fa fa-calendar-o"> </i>  <?php  echo    get_the_date();    ?>
			</div>

			<div class="comments">
				<i class="fa fa-comment-o"> <?php comments_popup_link('No comment yet') ; ?></i>
			</div>
		</div>	
			<div class="content_part">
				<?php the_content (); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'punit' ), 'after' => '</div>' ) ); ?>
			</div>	
</div>
<?php else : ?>

<div class="post-footer">

<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" >

	<h1 class="title"><?php the_title() ; ?></h1></a>

	<div class="content_part"><?php the_excerpt () ;?></div>

	<div class="category">
		<i class="fa fa-folder-open"></i>
		<?php echo get_the_term_list($post->ID,'category','','','') ;?>
	</div>
	
	<?php $posttags = get_the_term_list($post->ID,'post_tag','','','') ?>

	<?php if($posttags){ ?>
		<div class="tags">
			<i class="fa fa-tags"></i>
			<?php echo get_the_term_list($post->ID,'post_tag','','','') ;?>
		</div>
	<?php } ?>

	<div class="editlink">
		<?php edit_post_link(__('edit','punit'),'<i class="fa fa-edit"> ','</i>'); ?>
	</div>
</div>
<?php endif ;?>
</article>