<?php



/**

 * Template Name: test

 */



get_header();

?>

<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Portfolio</h1>
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

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">


        

             <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="ma" />Mobile Apps
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="wd" />Website Design
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="bs" class="rad" />Branding services
          </label>

            <?php ?>
         
        
          
          
         
        </div> 
      </div>
    </div>

    
    
   
    <div class="row shuffle-wrapper">

    
    <?php $args = array (

      'post_type' => ' testi',

      'orderby'    => 'ID',
      'post_status' => 'publish',
      'order'    => 'ASC',
      'posts_per_page' => -1
      );
      $result = new WP_Query($args);?>
        
        <?php
        if ( $result->have_posts() ) : 
        while($result->have_posts()):
        
        $result->the_post();

        print_r($result->posts_ID);
        

        ?>
        
        <?php 
        

        

              $tyreGallery = get_post_meta (get_the_id(), 'gallery_data', true );

              ?>

              <?php if( isset( $tyreGallery['image_url'] ) ){ ?>

              <?php foreach( $tyreGallery['image_url'] as $image ){ ?>


            <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;&quot;,&quot;&quot;]">
              <div class="position-relative rounded hover-wrapper">
                <img src="<?php echo $image ;?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                <div class="hover-overlay">
                  <div class="hover-content">
                    <a class="btn btn-light btn-sm" href="<?php echo $image ;?>">view</a>
                  </div>
                </div>
              </div>
            </div>  


            
            <?php  $s = get_the_ID();
        print_r($s);?>


      <?php
              }}endwhile;



              while($result->have_posts()):
        
                $result->the_post();
        
                print_r($result->posts_ID);
                
        
                ?>
                
                <?php 

                //Brandin Service
                 if(get_the_ID()=="317"){
        
                
        
                      $tyreGallery = get_post_meta (get_the_id(), 'gallery_data', true );
        
                      ?>
        
                      <?php if( isset( $tyreGallery['image_url'] ) ){ ?>
        
                      <?php foreach( $tyreGallery['image_url'] as $image ){ ?>
        
        
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;bs&quot;]">
                      <div class="position-relative rounded hover-wrapper">
                        <img src="<?php echo $image ;?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                        <div class="hover-overlay">
                          <div class="hover-content">
                            <a class="btn btn-light btn-sm" href="<?php echo $image ;?>">view</a>
                          </div>
                        </div>
                      </div>
                    </div>  
        
        
                    
                    <?php  $s = get_the_ID();
                print_r($s);?>
        
        
              <?php
                      }}}

                      //Website Design and mobile Application
                      if(get_the_ID()=="315"){
        
                
        
                        $tyreGallery = get_post_meta (get_the_id(), 'gallery_data', true );
          
                        ?>
          
                        <?php if( isset( $tyreGallery['image_url'] ) ){ ?>
          
                        <?php foreach( $tyreGallery['image_url'] as $image ){ ?>
          
          
                      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;wd&quot;,&quot;ma&quot;]">
                        <div class="position-relative rounded hover-wrapper">
                          <img src="<?php echo $image ;?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                          <div class="hover-overlay">
                            <div class="hover-content">
                              <a class="btn btn-light btn-sm" href="<?php echo $image ;?>">view</a>
                            </div>
                          </div>
                        </div>
                      </div>  
          
          
                      
                      <?php  $s = get_the_ID();
                  print_r($s);?>
          
          
                <?php
                        }}}
                      
                    
                    
                    
                    
                    
                    
                 

                      //mobile application
                    if(get_the_ID()=="316"){
        
                
        
                      $tyreGallery = get_post_meta (get_the_id(), 'gallery_data', true );
        
                      ?>
        
                      <?php if( isset( $tyreGallery['image_url'] ) ){ ?>
        
                      <?php foreach( $tyreGallery['image_url'] as $image ){ ?>
        
        
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;ma&quot;]">
                      <div class="position-relative rounded hover-wrapper">
                        <img src="<?php echo $image ;?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                        <div class="hover-overlay">
                          <div class="hover-content">
                            <a class="btn btn-light btn-sm" href="<?php echo $image ;?>">view</a>
                          </div>
                        </div>
                      </div>
                    </div>  
        
        
                    
                    <?php  $s = get_the_ID();
                print_r($s);?>
        
        
              <?php
                      }}}
                    
                  
                  
                  
                  
                  

                       //Website Design and Branding Service
                    if(get_the_ID()=="314"){
        
                
        
                      $tyreGallery = get_post_meta (get_the_id(), 'gallery_data', true );
        
                      ?>
        
                      <?php if( isset( $tyreGallery['image_url'] ) ){ ?>
        
                      <?php foreach( $tyreGallery['image_url'] as $image ){ ?>
        
        
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;wd&quot;,&quot;bs&quot;]">
                      <div class="position-relative rounded hover-wrapper">
                        <img src="<?php echo $image ;?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                        <div class="hover-overlay">
                          <div class="hover-content">
                            <a class="btn btn-light btn-sm" href="<?php echo $image ;?>">view</a>
                          </div>
                        </div>
                      </div>
                    </div>  
        
        
                    
                    <?php  $s = get_the_ID();
                print_r($s);?>
        
        
              <?php
                      }}}


                      //Web Design
                    if(get_the_ID()=="313"){
        
                
        
                      $tyreGallery = get_post_meta (get_the_id(), 'gallery_data', true );
        
                      ?>
        
                      <?php if( isset( $tyreGallery['image_url'] ) ){ ?>
        
                      <?php foreach( $tyreGallery['image_url'] as $image ){ ?>
        
        
                    <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;wd&quot;]">
                      <div class="position-relative rounded hover-wrapper">
                        <img src="<?php echo $image ;?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                        <div class="hover-overlay">
                          <div class="hover-content">
                            <a class="btn btn-light btn-sm" href="<?php echo $image ;?>">view</a>
                          </div>
                        </div>
                      </div>
                    </div>  
        
        
                    
                    
        
        
              <?php
                      }}}
                    
                    
                  
                  
                  
                  
                  
                  
                  
                  endwhile;




               wp_reset_query();
              //wp_reset_query();
              
              endif;
            
            ?>

       


       
	  
    </div>
  </div>
</section>
<!-- /portfolio --> 




<!-- contact -->
<?php  require get_template_directory() . '/inc/contact.php';?>
<!-- /contact -->






  

  <div>test template.php</div>
            }
            <?php get_footer();?>