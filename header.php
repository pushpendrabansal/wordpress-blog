<!-- Header file -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<?php wp_head();?>
	
</head>
<body <?php body_class() ; ?>>

<!--         Header                -->
<div class="header">
	<div class="top">
		<?php if(get_theme_mod('title_tagline')==1) : ?>
			<div class="top_center">	
		<?php else : ?>
			<div class="top_left">
		<?php endif ; ?>	
	    	<h1>	
				<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name')) ; ?> " rel="home">
				<?php  bloginfo('name') ; ?>
				</a>
			</h1>
			<h3><?php  bloginfo('description') ; ?></h3>
		</div>	

		<?php if(get_theme_mod('Show_Search_box',1)==1){ ?>
			<div class="top_right">
				<form method="get" id="topsearchform" action="<?php echo esc_url(home_url('/'));?>">
					<input type="text" class="top_text_box" name="s" id="s" placeholder="Search" />
					<button type="submit" name="submit" class="top_submit"><i class="fa fa-search fa-2x"></i></button>
				</form>
			</div>
		<?php } ?> 

	</div>

	<div class="menu<?php if(get_theme_mod('menu_center')==1) {?> align_center menu2<?php } ?> ">

		<?php wp_nav_menu(array('menu_class'=>'menu1','menu'=>'home')) ; ?>
		
	</div>

	<?php if(get_header_image()){ ?>
	<div class="header_image">
		<img src="<?php  header_image(); ?>" height="<?php echo get_custom_header()->height;?>"
											 width="<?php echo get_custom_header()->width;?>"
		>
	</div>
	<?php } ?>
	
</div>
