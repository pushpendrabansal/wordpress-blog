
<article id="post-0" >
<?php if(current_user_can('publish_posts')) : ?>

	<?php printf(__('ready to create post <a href="%s">click here</a>','punit'),esc_url(admin_url('post-new.php'))) ; ?>

<?php else :?>

	<?php _e("we can find you are searching for ") ; ?>

	<?php get_search_form() ; ?>

<?php endif ; ?>
</article>