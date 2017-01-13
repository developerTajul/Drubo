<?php 



add_action('admin_print_scripts', 'comet_line_js_code', 1000);


function comet_line_js_code(){
?>
<?php if( get_post_type() == 'post'): ?>
<script>
	

	jQuery(document).ready(function(){

		
		var id = jQuery('input[name="post_format"]:checked').attr('id');
// gallery
		if( id == 'post-format-gallery'){
			jQuery('#additional-postinfo').show();
			jQuery('.cmb2-id--corlate-gallery').show();
			jQuery('#postimagediv').hide();
		}else{
			jQuery('.cmb2-id--corlate-gallery').hide();
		}

// video
	if( id == 'post-format-video'){
		jQuery('#additional-postinfo').show();
		jQuery('.cmb2-id--corlate-video-link').show();
		jQuery('#postimagediv').hide();
	}else{
		jQuery('.cmb2-id--corlate-video-link').hide();
	}

// audio
	if( id == 'post-format-audio'){
		jQuery('#additional-postinfo').show();
		jQuery('#postimagediv').hide();
		jQuery('#additional-postinfo').show();
	}else{
		jQuery('.cmb2-id--corlate-audio-link').hide();
	}

// standard
	if( id == 'post-format-0' ){
		jQuery('#additional-postinfo').hide();
		
		jQuery('#postimagediv').hide();
	}

// image
	if( id == 'post-format-image'){
		jQuery('#postimagediv').show();
		jQuery('#additional-postinfo').hide();
	}

// quoe
	if(id == 'post-format-quote'){
		jQuery('#additional-postinfo').hide();
		
		jQuery('#postimagediv').hide();
	}


	




jQuery('input[name="post_format"]').change(function(){
var id = jQuery('input[name="post_format"]:checked').attr('id');
// gallery
		if( id == 'post-format-gallery'){
			jQuery('#additional-postinfo').show();
			jQuery('.cmb2-id--corlate-gallery').show();
			jQuery('#postimagediv').hide();
		}else{
			jQuery('.cmb2-id--corlate-gallery').hide();
		}

// video
	if( id == 'post-format-video'){
		jQuery('#additional-postinfo').show();
		jQuery('.cmb2-id--corlate-video-link').show();
		jQuery('#postimagediv').hide();
	}else{
		jQuery('.cmb2-id--corlate-video-link').hide();
	}

// audio
	if( id == 'post-format-audio'){
		jQuery('#additional-postinfo').show();
		jQuery('.cmb2-id--corlate-audio-link').show();
		jQuery('#postimagediv').hide();
	}else{
		jQuery('.cmb2-id--corlate-audio-link').hide();
	}

// standard
	if( id == 'post-format-0' ){
		jQuery('#additional-postinfo').hide();
		
		jQuery('#postimagediv').hide();
	}

// image
	if( id == 'post-format-image'){
		jQuery('#postimagediv').show();
		jQuery('#additional-postinfo').hide();
	}

// quote
	if(id == 'post-format-quote'){
		jQuery('#additional-postinfo').hide();
		
		jQuery('#postimagediv').hide();
	}

	});

});

</script>
<?php endif; ?>
<?php
}