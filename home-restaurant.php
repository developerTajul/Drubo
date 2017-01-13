<?php 
/**
* Template Name: Resturant
*
*/
get_header('resturant'); ?>

    <section id="home">
      <div id="home-slider" class="flexslider">
        <ul class="slides">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/bg/25.jpg" alt="">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1 class="cursive m-0">Welcome to</h1>
                  <h2 class="upper mt-0">Italian Restaurant</h2>
                  <p><a href="#reserve" data-scroll="true" class="btn btn-light-out">Book a table</a></p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <div class="col-md-5 md-pull-right">
          <div class="title txt-sm-center txt-xs-center">
            <h2 class="cursive mb-0">This is</h2>
            <h3 class="upper">Our Story<span class="red-dot"></span></h3>
            <hr>
          </div>
          <div class="section-content p-0 txt-sm-center txt-xs-center">
            <p class="h1 cursive grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore similique minima, tenetur veniam, corrupti rem voluptate quis a unde officia quo repudiandae ducimus commodi.</p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="photo-gallery mt-50">
            <li class="half">
              <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/14.jpg" alt=""></div>
            </li>
            <li class="half">
              <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/15.jpg" alt=""></div>
            </li>
            <li class="half">
              <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/16.jpg" alt=""></div>
            </li>
            <li class="half">
              <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/17.jpg" alt=""></div>
            </li>
          </ul>
        </div>
      </div>
    </section>


    <section id="menu" class="parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/34.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="container">
          <div class="section-content">
            <div class="title center mb-100">
              <h2 class="cursive mb-0">Discover</h2>
              <h3 class="upper">The Menu<span class="red-dot"></span></h3>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="grey pt-0 ov-v">
      <div class="container">
        <div class="restaurant-menu">

          <div class="col-md-6">
            <div class="row">
              <div class="rs-menu image-right">
                <div class="rs-menu-media"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/1.jpg" alt="" class="thumb-placeholder"></div>
                <div class="rs-menu-body">
                  <h2 class="cursive">Italian Pasta</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <h4>From $9.99</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="rs-menu image-right">
                <div class="rs-menu-media"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/2.jpg" alt="" class="thumb-placeholder"></div>
                <div class="rs-menu-body">
                  <h2 class="cursive">Spaghetti</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <h4>From $6.99</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="rs-menu">
                <div class="rs-menu-media"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/3.jpg" alt="" class="thumb-placeholder"></div>
                <div class="rs-menu-body">
                  <h2 class="cursive">Pizza</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <h4>From $79.99</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="rs-menu">
                <div class="rs-menu-media"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/4.jpg" alt="" class="thumb-placeholder"></div>
                <div class="rs-menu-body">
                  <h2 class="cursive">Banana Split</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <h4>From $12.99</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="rs-menu image-right">
                <div class="rs-menu-media"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/5.jpg" alt="" class="thumb-placeholder"></div>
                <div class="rs-menu-body">
                  <h2 class="cursive">Muffin</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <h4>From $4.99</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="rs-menu image-right">
                <div class="rs-menu-media"><img src="<?php echo get_template_directory_uri(); ?>/images/menu/6.jpg" alt="" class="thumb-placeholder"></div>
                <div class="rs-menu-body">
                  <h2 class="cursive">Spinach Salad</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <h4>From $8.99                  </h4>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="facts" class="parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/26.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="container">
          <div class="section-content text-center p-0">
            <div class="col-md-3 col-sm-6">
              <div class="counter block">
                <div class="counter-icon"><i class="icon-wine"></i></div>
                <div class="counter-content">
                  <h5 class="cursive"><span data-count="212" class="number-count">212</span></h5><span>Different Wines</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="counter block">
                <div class="counter-icon"><i class="icon-happy"></i></div>
                <div class="counter-content">
                  <h5 class="cursive"><span data-count="970" class="number-count">970</span></h5><span>Happy Clients</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="counter block">
                <div class="counter-icon"><i class="icon-bike"></i></div>
                <div class="counter-content">
                  <h5 class="cursive"><span data-count="15" class="number-count">15</span></h5><span>Free Parkings</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="counter block">
                <div class="counter-icon"><i class="icon-mic"></i></div>
                <div class="counter-content">
                  <h5 class="cursive"><span data-count="12" class="number-count">12</span></h5><span>Piano Bar Singers              </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="reserve">
      <div class="container">
        <div class="title mt-0 pl-15 txt-sm-center txt-xs-center">
          <h2 class="cursive mb-0">Reserve</h2>
          <h3 class="upper">A Table<span class="red-dot"></span></h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="col-md-7">
            <div class="reserve-form">         
              <form id="contact-form" method="POST" action="http://demo.codepark.co/comet/mail.php">
                <div class="form-group">
                  <input name="fullname" type="text" placeholder="Your Name" data-required="true" class="form-control">
                </div>
                <div class="form-group">
                  <input name="email" type="email" placeholder="Your Email" data-required="true" class="form-control">
                </div>
                <div class="form-group">
                  <input name="phone" type="text" placeholder="Phone Number" data-required="false" class="form-control">
                </div>
                <div class="form-group">
                  <input name="guests" type="number" placeholder="Number of guests" data-required="true" min="1" class="form-control">
                </div>
                <div class="form-group">
                  <input name="date" type="date" placeholder="Date" data-required="true" class="form-control">
                </div>
                <div class="form-group txt-sm-center txt-xs-center">
                  <button type="submit" class="btn btn-dark-out">Reserve</button>
                </div>
              </form>
            </div>
          </div>
          
          <div class="col-md-4 col-md-offset-1 hidden-xs hidden-sm">
            <div class="col-md-12 col-sm-4">
              <div class="icon-box-basic"><i class="icon-map"></i>
                <h4>Address</h4>
                <p><span>Fourth Floor</span><span>76 Ninth Ave, New York        </span></p>
              </div>
            </div>
            <div class="col-md-12 col-sm-4">
              <div class="icon-box-basic"><i class="icon-phone"></i>
                <h4>Phones</h4>
                <p><span>+12 212-568-999</span><span>+12 323-999-568        </span></p>
              </div>
            </div>
            <div class="col-md-12 col-sm-4">
              <div class="icon-box-basic"><i class="icon-envelope"></i>
                <h4>E-mail</h4>
                <p><span>hello@comet.com</span><span>business@comet.com </span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php get_footer(); ?>