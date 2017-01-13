<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
        <div class="col-md-8">
          <div class="blog-posts">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>	
          
 



            

          </div>

<?php the_posts_pagination(array(
      'prev_text' => '<span aria-hidden="true"><i class="ti-arrow-left"></i></span>',
      'next_text' => '<span aria-hidden="true"><i class="ti-arrow-right"></i></span>',
      'screen_reader_text'  => ' '
)); ?>
          <ul class="pagination">
            <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a></li>
          </ul>
        </div>



        <?php get_sidebar(); ?>
      </div>
    </section>



<?php

get_footer();
