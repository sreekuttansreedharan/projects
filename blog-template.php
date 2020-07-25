<?php



/**

 * Template Name: blog

 */



get_header('sub');

?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Blogs</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="<?php echo get_template_directory_uri(); ?>/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- blog -->
<section class="section">
  <div class="container">
    <div class="row">

    <?php  $args = array(
        
        'post_type' => 'blog',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'ASC',
        'posts_per_page' => -1 
    );

    $result = new Wp_query($args);

    if($result->have_posts()):

      while($result->have_posts()): 
        
        $result->the_post();
    
    ?>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="<?php the_permalink();?>"><?php the_title();?></a>
              </h4>
              <p class="cars-text"><?php the_excerpt();?></p>
              <a href="<?php the_permalink();?>" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>

        <?php endwhile;
      wp_reset_query();?>
     <?php endif;?>

    </div>
  </div>
</section>
<!-- /blog -->

<!-- clients -->
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Clients</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="client-logo-slider d-flex align-items-center">

        <?php 
        
        $args = array(

          'post_type' => 'myclients',
          'orderby'    => 'ID',
          'post_status' => 'publish',
          'order'    => 'ASC',
          'posts_per_page' => -1

        );
        $result = new Wp_query($args);

        if($result->have_posts()):

          while($result->have_posts()): 
            
            $result->the_post();
        ?>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo get_the_post_thumbnail_url(); ?>" alt="client-logo"></a>
          
          <?php endwhile;
      wp_reset_query();?>
     <?php endif;?> 
      </div>
    </div>
  </div>
</section>
<!-- /clients -->

<!-- contact -->
<?php  require get_template_directory() . '/inc/contact.php';?>
<!-- /contact -->

<?php get_footer();?>