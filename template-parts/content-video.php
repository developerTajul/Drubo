<article class="post-single">
  <div class="post-info">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By</span><a href="<?php the_author_link(); ?>"> <?php the_author(); ?></a><span class="dot"></span><span><?php the_time('d F Y'); ?></span><span class="dot"></span><?php the_tags('', ' ,'); ?></h6>
  </div>
  <div class="post-media">
    <div class="media-video">
    <?php 
    $video = get_post_meta(get_the_ID(), '_corlate-video-link', true);
    ?>
    <?php echo wp_oembed_get($video); ?>
    </div>
  </div>
  <div class="post-body">
    <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>