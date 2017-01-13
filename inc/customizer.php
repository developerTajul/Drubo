<?php
/**
 * Corlate Theme Customizer.
 *
 * @package Corlate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


add_action('customize_register', 'comet_theme_customizer');

function comet_theme_customizer( $customizer ){
	//  Header Section 
	$customizer-> add_section('header_section', array(
		'title'	=> 'Upload Your Logo',
		'priority' => 20	
	));

	// light logo
	$customizer-> add_setting('logo_light', array(
		'default'	=> 'light logo',
		'transport'	=> 'refresh'
	));

	$customizer-> add_control( new WP_Customize_Image_Control(
		$customizer, 'logo_light', array(
			'label'		=> 'Uplad Light Logo',
			'section'	=> 'header_section',
			'setting'	=> 'logo_light'
		)
	));

	// dark logo
	$customizer-> add_setting('logo_dark', array(
		'default'	=> 'dark logo',
		'transport'	=> 'refresh'
	));

	$customizer-> add_control( new WP_Customize_Image_Control(
		$customizer, 'logo_dark', array(
			'label'		=> 'Uplad Dark Logo',
			'section'	=> 'header_section',
			'setting'	=> 'logo_dark'
		)
	));



	// <!-- Footer Section -->
	$customizer -> add_section('footer_section', array(
		'title'		=> 'Footer Section',
		'priority'	=> 200
	));

	// copyright info
	$customizer -> add_setting('copy_info', array(
		'default'	=> 'Copyright to Spellbit Ltd',
		'transport' => 'postMessage'
	));

	$customizer -> add_control('copy_info', array(
		'section'	=> 'footer_section',
		'label'		=> 'Copy Info',
		'type'		=> 'text'
	));

	// copyright color info
	$customizer-> add_setting('copy_info_color', array(
		'default' => '#000',
		'transport' => 'postMessage'	
	));

	$customizer-> add_control( 
		new WP_Customize_Color_Control($customizer, 'copy_info_color', 
		array(
			'label'	=> 'Copyright Color',
			'section'=> 'footer_section',
			'setting' => 'copy_info_color'	
		)
	));

	// socail icons
	$customizer->add_setting();
	



}



/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
function comet_customizer_live_preview()
{
	wp_enqueue_script( 
		  'comet-themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/js/customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '4.0.4',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'comet_customizer_live_preview' );