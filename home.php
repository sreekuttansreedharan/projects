<?php
/**

 * Template Name: Home

 */

?>

<?php get_header();?>


<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">We Craft <br>Digital <br> Experiences</h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-bg.png" alt="bg-shape">
  </div>
  <div class="layer" id="l2">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l3">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l4">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l5">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-yellow.png" alt="bg-shape">
  </div>
  <div class="layer" id="l6">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l7">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-group-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l8">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-pink-round.png" alt="bg-shape">
  </div>
  <div class="layer" id="l9">
    <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-cyan-2.png" alt="bg-shape">
  </div>
  <!-- social icon -->
  <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3"><a class="text-white" href="#"><i class="ti-facebook"></i></a></li>
    <li class="mb-3"><a class="text-white" href="#"><i class="ti-instagram"></i></a></li>
    <li class="mb-3"><a class="text-white" href="#"><i class="ti-dribbble"></i></a></li>
    <li class="mb-3"><a class="text-white" href="#"><i class="ti-twitter"></i></a></li>
  </ul>
  <!-- /social icon -->
</section>
<!-- /hero area -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
       <?php  $args = array(

            'post_type'    => 'about us',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'ASC',
            'posts_per_page' => -1
           );
           $result = new WP_Query( $args );

            $num = $result->post_count; 
            
           if ( $result->have_posts() ) : 

            while($result->have_posts()): 

            $result->the_post(); ?>
            
        <?php the_excerpt();?>>

        <?php endwhile;
     wp_reset_query();?>
     <?php endif;?>
		
    <img src="<?php echo get_template_directory_uri(); ?>/images/BCMSLOGO copy.png" class="img-fluid" height="150px" width="150px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="<?php echo get_template_directory_uri(); ?>/images/E branding copy.png" class="img-fluid" height="150px" width="150px">
       
      </div>
    </div>
  </div>
</section> 
<!-- /about -->
<!-- services -->
<div class id="services">
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Services</h2>
      </div>

      <?php
      
      
      $args = array(

        'post_type'    => 'services',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'ASC',
        'posts_per_page' => -1


      );

      

      $result = new WP_Query( $args );

      $num = $result->post_count; 
      //echo print_r( $num);
      $i=0;

      if ( $result->have_posts() ) : 
      while($result->have_posts()): 
      $result->the_post(); $i++;
      
      //echo print_r( $i);
      ?>
      <?php if(($i==2) || ($i==5)) {?>

      <div class="col-md-4 mb-4 mb-md-0">
      <div class="card active-bg-primary hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
           <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid">
            <h4 class="mb-4"><?php the_title();?></h4>
            <p><?php the_content();?>.</p>
          </div>
        </div>
      </div>
      <?php }else{?>

        <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
           <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid">
            <h4 class="mb-4"><?php the_title();?></h4>
            <p><?php the_content();?>.</p>
          </div>
        </div>
      </div>
      <?php }?>
      
                                      
     <?php endwhile;
     wp_reset_query();?>
     <?php endif;?>
      <!--
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card active-bg-primary hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid">
            <h4 class="mb-4"><?php the_title();?></h4>
            <p><?php the_content();?>.</p>
          </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
           <img src="images/icons/app.png" class="img-fluid">
            <h4 class="mb-4">Mobile Applications</h4>
            <p>We design creative Mobile Applications on Android & Apple Platforms. Some of recently designed apps are for "KEKANOO", "BMF Bahrain", Cineco "ShowTime Bahrain" and many more.</p>
          </div>
        </div>
      </div>
    </div>

  
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title"></h2>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
           <img src="images/icons/cms.png" class="img-fluid">
            <h4 class="mb-4">Content Management System</h4>
            <p>Content Management System (CMS) facilitates easy website content management without getting involved with the technical intricacies of Web development. With CMS, content can be published, removed or updated, and several essential Web maintenance functions can be executed without the knowledge of any web programming.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card active-bg-primary hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
           <img src="images/icons/app (1).png" class="img-fluid">
            <h4 class="mb-4">E-commerce Solutions</h4>
            <p>E-commerce enables to conduct your business online. This provides you the opportunity to not only make your products or services available to the global market but also let the customer choose, buy and pay online through your website 24x7. Online Shopping Cart | Payment Gateway Integration | SMS Services.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
           <img src="images/icons/social-media-marketing.png" class="img-fluid">
            <h4 class="mb-4">Digital Marketing</h4>
            <p>Digital marketing is the component of marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones and other digital media and platforms to promote products and services</p>
          </div>
        </div>
      </div>
    </div>-->
  </div>
  </div>
</section> 
</div>
<!-- /services -->


<!-- skills -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Skills</h2>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
            <div class="wave" data-progress="90%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web Design (90%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
            <div class="wave" data-progress="95%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web Development (95%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Mobile Applications(80%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
            <div class="wave" data-progress="75%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Digital Marketing (75%)</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /skills -->
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="<?php echo get_template_directory_uri(); ?>/images/backgrounds/education-bg.png" alt="bg-image">
</section>
<!-- /education -->



<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Recent works</h2>
      </div>
    </div>
    <div class="row shuffle-wrapper">

    <?php $args = array (

      'post_type' => 'recent works',

      'orderby'    => 'ID',
      'post_status' => 'publish',
      'order'    => 'ASC',
      'posts_per_page' => -1
    );
    $result = new WP_Query($args);

    if ( $result->have_posts() ) : 
      while($result->have_posts()): $result->the_post(); 

    ?>



      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="<?php echo get_the_post_thumbnail_url();?>" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="project-single.html">view</a>
            </div>
          </div>
        </div>
      </div>

      <?php 
      endwhile;
      wp_reset_query();
    endif;
      ?>
      
    </div>
  </div>
</section>
<!-- /portfolio -->

<!-- testimonial -->
<section class="section bg-primary position-relative testimonial-bg-shapes">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white mb-5">Testimonials</h2>
      </div>
      <div class="col-lg-10 mx-auto testimonial-slider">
        <!-- slider-item -->

        <?php $args = array (

          'post_type' => ' Testimonials',

          'orderby'    => 'ID',
          'post_status' => 'publish',
          'order'    => 'ASC',
          'posts_per_page' => -1
          );
          $result = new WP_Query($args);

          if ( $result->have_posts() ) : 
          while($result->have_posts()): $result->the_post(); 

        ?>
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4"><?php echo the_content();?></p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="<?php  echo get_the_post_thumbnail_url();?>"
            alt="client-image">
          <h4 class="text-white"><?php the_title();?></h4>
          <h6 class="text-light mb-4"><?php the_excerpt();?></h6>
        </div>
        <?php 
          endwhile;
          wp_reset_query();
        endif;
      ?>
        <!-- slider-item 
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
              ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit in
            voluptate velit
            esse cillum dolore eu fugiat nulla pariatur.</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Jesica Gomez</h4>
          <h6 class="text-light mb-4">CEO, Funder</h6>
        </div>
         slider-item 
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
              ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit in
            voluptate velit
            esse cillum dolore eu fugiat nulla pariatur.</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="<?php echo get_template_directory_uri(); ?>/images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Jesica Gomez</h4>
          <h6 class="text-light mb-4">CEO, Funder</h6>
        </div>-->
      </div>
    </div>
  </div>
  <!-- bg shapes -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
</section>
<!-- /testimonial -->

<!-- client logo slider -->
<section class="section pb-0" style="background-color:#FFFFFF">
  <div class="container" >
    <div class="client-logo-slider d-flex align-items-center">

    <?php $args = array (

      'post_type' => ' logos',

      'orderby'    => 'ID',
      'post_status' => 'publish',
      'order'    => 'ASC',
      'posts_per_page' => -1
      );
      $result = new WP_Query($args);
      $num = $result->post_count; 
      //print_r($num);
      if ( $result->have_posts() ) : 
      while($result->have_posts()): $result->the_post();
      global $post;
      //$meta = get_post_custom(get_the_ID() ) ; 
      
    ?>
      

    
      <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="<?php  echo get_the_post_thumbnail_url();?>" alt="client-logo"></a>
          <?php  endwhile;
          wp_reset_query();?>
     <?php endif;?>
    </div>
  </div>
</section>
<!-- /client logo slider -->



<!-- contact -->
<?php  require get_template_directory() . '/inc/contact.php';?>
<!-- /contact -->

<?php get_footer();?>