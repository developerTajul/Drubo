<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Corlate
 */

?>

<article class="post-single">
  <div class="post-info">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By</span><a href="<?php the_permalink(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F Y'); ?></span><span class="dot"></span><?php the_tags('', ', '); ?></h6>
  </div>

			<?php 
        $video = get_post_meta(get_the_ID(), '_corlate-video-link', true);
        $audio_link = get_post_meta(get_the_ID(), '_corlate-audio-link', true);
        $image_gallery = get_post_meta(get_the_ID(), '_corlate-gallery', true);
      ?>

    <!-- video -->
    <?php if( $video ): ?>  
      <div class="media-video">
          <?php echo wp_oembed_get($video); ?>
      </div>
    <?php endif; ?>         
			
			<!-- audio -->
			<?php if( $audio_link ): ?>
              <div class="post-media">
                <div class="media-audio">
                
                  <?php echo wp_oembed_get($audio_link); ?>
                </div>
              </div>
			<?php endif; ?>

			<!-- gallery -->
			<?php if($image_gallery ): ?>
			  <div class="post-media">
    			<div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
      				<ul class="slides">
      <?php  
      foreach ($image_gallery as $image) { ?>
       
       <li><img src="<?php echo $image; ?>" alt=""></li>

      <?php }  
      ?>

			      </ul>
			    </div>
			  </div>
			<?php endif; ?>	


  <div class="post-body">
    <p><?php echo wp_trim_words(get_the_content(), 50, '...'); ?></p>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>
