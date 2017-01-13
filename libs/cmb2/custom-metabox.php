<?php 

add_action('cmb2_admin_init', 'corlate_metabox_fn');


function corlate_metabox_fn(){

	$post_formats = new_cmb2_box(array(
		'title'		=> 'Additional Postinfo',
		'id'		=> 'additional-postinfo',
		'object_types'	=> array('post')
	));


	$post_formats ->add_field(array(
		'name'		=> 'Gallery Images',
		'id'		=> '_corlate-gallery',
		'desc'		=> 'Upload Gallery Images From Here',
		'type'		=> 'file_list'
	));

	$post_formats ->add_field(array(
		'name'		=> 'Video Link',
		'id'		=> '_corlate-video-link',
		'desc'		=> 'Paste Video Link Here',
		'type'		=> 'oembed'
	));

	$post_formats ->add_field(array(
		'name'		=> 'Audio Link',
		'id'		=> '_corlate-audio-link',
		'desc'		=> 'Paste Audio Link Here',
		'type'		=> 'oembed'
	));

}