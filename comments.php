<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Corlate
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

?>


<div id="comments">
    <h5 class="upper"><?php comments_number('no comment', '1st Comment', '% comments'); ?></h5>
    <ul class="comments-list">
		<?php wp_list_comments( array(
			'callback'	=> 'comet_comments_fn'
		)); ?>
	</ul>
</div>		



		<?php comment_form(); ?>

