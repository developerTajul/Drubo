<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Corlate
 */

get_header(); ?>

    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section>
      <div class="container">
        <div class="col-md-8 col-md-offset-2">

		<?php
		while ( have_posts() ) : the_post(); ?>

	    <article class="post-single">
	      <div class="post-info">
	        <h2><?php the_title(); ?></h2>
	        <h6 class="upper"><span>By</span><a href="<?php the_author_link(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F Y'); ?></span><span class="dot"></span><?php the_tags('', ', '); ?></h6>
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
	        <?php the_content(); ?>
	      </div>
	    </article>

		<?php	// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		

		</div>
	</div>
</section>

<?php get_footer(); ?>
