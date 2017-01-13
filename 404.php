<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Corlate
 */

get_header(); ?>



<section class="parallax" id="error-404" style="z-index: 20;">
    <div class="parallax-bg" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/18.jpg" data-parallax="scroll"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="error-page"><i class="icon-sad"></i>
                <div class="title">
                  <h2 class="mb-25 upper">Error 404<span class="red-dot"></span></h2>
                  <h4 class="upper">The requested page was not found on this server. That’s all we know.              </h4>
                </div>
                <div class="inline-form center mb-50">
                <form method="GET" action="<?php echo site_url(); ?>">
                  <div class="input-group">
                  
                    <input type="text" name="s" class="form-control" placeholder="Search.."><span class="input-group-btn">
                      <button class="btn btn-light" type="submit"><span><i class="ti-search"></i></span></button></span>
                     
                  </div>
                  </form> 
                </div><a class="btn btn-color" href="<?php echo site_url(); ?>">Back to the home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<?php
get_footer();
