<?php



/**

 * Template Name: about us

 */



get_header('sub');

?>


<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">About Us</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7">

      <?php  $args = array(

            'post_type'    => 'about us',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'ASC',
            'posts_per_page' => -1
            );
            $result = new WP_Query( $args );

            //$num = $result->post_count; 

            if ( $result->have_posts() ) : 

            while($result->have_posts()): 

            $result->the_post(); ?>
        <?php the_content();?>       
      </div>

      <?php endwhile;
     wp_reset_query();?>
     <?php endif;?>
      <div class="col-md-4 text-center" style="margin-left:60px;padding-right: 10px;">
        <div class="shadow-down mb-4" >
          <img src="<?php echo get_template_directory_uri(); ?>/images/WDLOGOSINGLE.png" alt="company" class="img-fluid ">
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/BCMSLOGO copy.png" alt="company"  class="img-fluid" height="200px" width="150px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?php echo get_template_directory_uri(); ?>/images/E branding copy.png" alt="company" class="img-fluid" height="200px" width="150px">
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- Work Process -->
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Work Process</h2>
      </div>

      <?php
      
      
      $args = array(

        'post_type'    => 'work process',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'ASC',
        'posts_per_page' => -1


      );

      

      $result = new WP_Query( $args );

      $num = $result->post_count; 
     

      if ( $result->have_posts() ) : 
      while($result->have_posts()): $result->the_post(); ?>

      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
       
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" class="mb-4"  alt="icon">
		  <br/><br/>
          <h4 class="mb-4"><?php the_title() ; ?></h4>
          <p> <?php the_content() ; ?>.</p>
       
      </div>
      <?php endwhile;
      wp_reset_query();?>
     <?php endif;?>
      
    </div>
  </div>
</section>
<!-- ./Work Process -->

<!-- contact -->
<section class="section section-on-footer" data-background="<?php echo get_template_directory_uri(); ?>/images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Contact Info</h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <h4 class="mb-80">Contact Form</h4>
          <form action="#" class="row">
            <div class="col-md-6">
              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4">
            </div>
            <div class="col-md-6">
              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4">
            </div>
            <div class="col-12">
              <textarea name="message" id="message" class="form-control px-0 mb-4"
                placeholder="Type Message Here"></textarea>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<?php get_footer();?>