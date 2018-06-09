<?php

	/*     functions          */


//function for the text box
function punit_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

// function for the checkbox
function punit_sanitize_checkbox($input){
	if($input == 1){
		return 1;
	}
	else{
		return '';
	}

}
       /* Theme customizer */

add_action('customize_register','punit_theme_customizer');
function punit_theme_customizer( $wp_customize ){

						  	  /*         Header panel         */

$wp_customize->add_panel('header_panel',array('title'=>__('Header', 'punit'),'priority' => '10'));


								// Creating section searchbox

$wp_customize->add_section('header_section_1',array('panel' => 'header_panel','title' => __('Search box','punit'),'priority' => '10'
	));

// Creating fields searchbox

$wp_customize->add_setting('Show_Search_box',array('default' => 1,'sanitize_callback' => 'punit_sanitize_checkbox'));
$wp_customize->add_control('Show_Search_box',array('type'=>'checkbox','section'=>'header_section_1','label'=>__('Show Search box','punit')));

								 // Creating Section title

$wp_customize->add_section('header_section_2',array('panel' => 'header_panel','title' => __('title and tagline','punit'),'priority' => '11'));

// Creating fields title center

$wp_customize->add_setting('title_tagline',array('default' => '', 'sanitize_callback' => 'punit_sanitize_checkbox'));
$wp_customize->add_control('title_tagline',array('type'=>'checkbox','section'=>'header_section_2','label'=>__('Center Title','punit')));
				
								// Creating Section  menu

$wp_customize->add_section('header_section_3',array('panel' => 'header_panel','title' => __('Menu','punit'),'priority' => '12'
	));

// Creating fields menu

$wp_customize->add_setting('menu_center',array('default' => '', 'sanitize_callback' => 'punit_sanitize_checkbox'));
$wp_customize->add_control('menu_center',array('type'=>'checkbox','section'=>'header_section_3','label'=>__('Center menu','punit')));

								// Creating Section Header Image

$wp_customize->add_section('header_image',array('panel' => 'header_panel','title' => __('Header Image','punit'),'priority' => '13'
	));


}
?>
