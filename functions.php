<?php

if(! function_exists ('webdesign_theme_setup')){

    function webdesign_theme_setup(){

        add_theme_support('tittle-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('html5' , array('earch-form','comment-form', 'comment-list','gallery', 'caption','script','style'));

        add_theme_support('custom-logo');

        // Add theme support for selective refresh for widgets.

        add_theme_support('customize-selective-refresh-widgets');



        // Add support for Block Styles.

        add_theme_support('wp-block-styles');



        // Add support for full and wide align images.

        add_theme_support('align-wide');



        // Add support for editor styles.

        add_theme_support('editor-styles');



        // Enqueue editor styles.

        add_editor_style('style-editor.css');



        // Add support for responsive embedded content.

        add_theme_support('responsive-embeds');

    }
}

add_action('after_setup_theme', 'webdesign_theme_setup');

function add_theme_styles(){


    wp_enqueue_style('bootstrap.min',get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.css',array(),wp_get_theme()->get('version'));

    wp_enqueue_style('slick',get_template_directory_uri().'/plugins/slick/slick.css',array(),wp_get_theme()->get('version'));

    wp_enqueue_style('themify-icons',get_template_directory_uri().'/plugins/themify-icons/themify-icons.css',array(),wp_get_theme()->get('version'));
    wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css',array(),wp_get_theme()->get('version'));



    

    wp_enqueue_script('jquery.min',get_template_directory_uri() .'/plugins/jQuery/jquery.min.js',array(), '1.0.0', true); 

    wp_enqueue_script('bootstrap.min',get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js',array(), '1.0.0', true);

    wp_enqueue_script('isotope.pkgd',get_template_directory_uri().'/plugins/isotope-layout/isotope.pkgd.js',array(), '1.0.0', true);

    wp_enqueue_script('isotope.pkgd.min',get_template_directory_uri().'/plugins/isotope-layout/isotope.pkgd.min.js',array(), '1.0.0', true);

    wp_enqueue_script('slick.min',get_template_directory_uri() .'/plugins/slick/slick.min.js',array(), '1.0.0', true );

    wp_enqueue_script('shuffle.min',get_template_directory_uri() .'/plugins/shuffle/shuffle.min.js',array(), '1.0.0', true );

    wp_enqueue_script('script',get_template_directory_uri() .'/js/script.js',array(), '1.0.0', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

        wp_enqueue_script( 'comment-reply' );
    } 

}

add_action('wp_enqueue_scripts', 'add_theme_styles');

add_filter('show_admin_bar', '__return_false');

function menu_items() {

    register_nav_menu('primary_menu',__( 'Primary menu' ) );

   register_nav_menu('secondary_menu', __('Secondary menu')  );
}

add_action( 'init', 'menu_items' );

/*=============================================================*/
                /*  CUSTOM POST TYPES */
/*==========================START==============================*/                  

function post_type() {

    register_post_type( 'services', array(

        'labels' => array(

        'name' =>  'Services' ,

        'singular_name' => 'Service' ),

        'menu-icon' => 'dashicon-clipboard',

        'supports' => array('title','editor', 'custom-fields', 'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => ''))
    
    );


    register_post_type( 'recent works', array(

        'labels' => array(

        'name' =>  'Recent Works' ,

        'singular_name' => 'Recent Work' ),

        'menu-icon' => 'dashicons-admin-network',

        'supports' => array('title','editor',  'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => 'recentworks'))
    
    );
    
    
    register_post_type( 'Testimonials', array(

        'labels' => array(

        'name' =>  'Testimonials' ,

        'singular_name' => 'Testimonial' ),

        'menu-icon' => 'dashicons-admin-network',

        'supports' => array('title','editor', 'excerpt','custom-fields', 'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => ''))
    
    );

    register_post_type( 'logos', array(

        'labels' => array(

        'name' =>  'Logos' ,

        'singular_name' => 'Logo' ),

        'menu-icon' => 'dashicons-admin-network',

        'supports' => array('title','editor','custom-fields',  'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => ''))
    
    );

    register_post_type( 'work process', array(

        'labels' => array(

        'name' =>  'Work Process' ,

        'singular_name' => 'Work Process' ),

        'menu-icon' => 'dashicons-admin-network',

        'supports' => array('title','editor','custom-fields',  'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => ''))
    
    );

    register_post_type( 'portfolios', array(

        'labels' => array(

        'name' =>  'Portfolios' ,

        'singular_name' => 'Portfolio' ),

        'menu-icon' => 'dashicons-admin-network',

        'supports' => array('title','editor', 'custom-fields', 'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => ''))
    
    );

    
    register_post_type( 'blog', array(

        'labels' => array(

        'name' =>  'Blogs' ,

        'singular_name' => 'Blog' ),

        'menu-icon' => 'dashicons-admin-network',

        'supports' => array('title','editor','custom-fields','excerpt',  'thumbnail'),

        'public' => true,

        'has_archive' => true,
        
        'rewrite' => array('slug' => ''))
    
    );

    register_post_type( 'myclients', array(

      'labels' => array(

      'name' =>  'My Clients' ,

      'singular_name' => 'My client' ),

      'menu-icon' => 'dashicons-admin-network',

      'supports' => array('title','editor','custom-fields','excerpt',  'thumbnail'),

      'public' => true,

      'has_archive' => true,
      
      'rewrite' => array('slug' => ''))
  
  );

  register_post_type( 'about us', array(

    'labels' => array(

    'name' =>  'About Us' ,

    'singular_name' => 'About Us' ),

    'menu-icon' => 'dashicons-admin-network',

    'supports' => array('title','editor','excerpt',  'thumbnail'),

    'public' => true,

    'has_archive' => true,
    
    'rewrite' => array('slug' => ''))

);


}
add_action( 'init', 'post_type' );


require get_template_directory() . '/inc/mul_image.php';

/*=============================================================*/
                /* CUSTOM POST TYPES 
/*==========================END================================*/ 



/* -----------------------------------------------------------------------------
* Vibes Custom Metabox: Multiple Image Upload
* -------------------------------------------------------------------------- */
/*
* @Resource: http://themefoundation.com/wordpress-meta-boxes-guide/
*/
/**
 * Loads the image management javascript
 */


function add_file_types_to_uploads($file_types){

  $new_filetypes = array();

  $new_filetypes['svg'] = 'image/svg';

  $file_types = array_merge($file_types, $new_filetypes );
   
  return $file_types; 
} 

add_action('upload_mimes', 'add_file_types_to_uploads');


function add_upload_image_meta_box(){

  $screens = array( 'portfolios', 'service' );

    foreach ( $screens as $screen ) {

    add_meta_box('portfolio_meta','Upload image','show_upload_image_meta_box',$screen,"normal", "low");
  }

}

   add_action('add_meta_boxes','add_upload_image_meta_box');

   function show_upload_image_meta_box(){

  global $post;

  $meta = get_post_meta( $post->ID );
      
    ?> 
<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
<p>


<p>
<label for="image">Image Upload</label><br>
<input type="text" name="image" id="image" class="meta-image regular-text" value="<?=  @$meta['image'][0] ?>">
<input type="button" class="button image-upload" value="Browse">
</p>
<div class="image-preview"><img src="<?= @$meta['image']; ?>" style="max-width: 250px;"></div>


<script>
jQuery(document).ready(function ($) {
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame;
    // Runs when the image button is clicked.
    $('.image-upload').click(function (e) {
      // Get preview pane
      var meta_image_preview = $(this).parent().parent().children('.image-preview');
      // Prevents the default action from occuring.
      e.preventDefault();
      var meta_image = $(this).parent().children('.meta-image');
      // If the frame already exists, re-open it.
      if (meta_image_frame) {
        meta_image_frame.open();
        return;
      }
      // Sets up the media library frame
      meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
        title: meta_image.title,
        button: {
          text: meta_image.button
        }
      });
      // Runs when an image is selected.
      meta_image_frame.on('select', function () {
        // Grabs the attachment selection and creates a JSON representation of the model.
        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
        // Sends the attachment URL to our custom image input field.
        meta_image.val(media_attachment.url);
        meta_image_preview.children('img').attr('src', media_attachment.url);
      });
      // Opens the media library frame.
      meta_image_frame.open();
    });
  });


</script>

<?php }

    
//save to database
function save_content_custom_fields(){
global $post;

if ( $post )
{
  update_post_meta($post->ID, "image", @$_POST["image"]);

}
}
//add_action( 'admin_init', 'show_upload_image_meta_box' );
add_action( 'save_post', 'save_content_custom_fields' );



//enquiry

function contact_form() {
        
  if( isset($_POST) && !empty($_POST) && isset($_POST['contact']) )
  {
      
  
      
      //print_r($_POST);exit;
      $name       = $_POST['name'];
      $email    = $_POST['email'];
      $msg        = $_POST['message'];
     
  
      $message = "Full Name: ".$name."<br>Mail ID: ".$email."<br>Message: ".$msg."<br />";
      //print_r($message);     

     $subject = " nnn";
      
      //$to = "marketing@kekanoo.com, harshal@kekanoo.com, no-reply@kekanoo.com";

      ini_set("SMTP","smtp.gmail.com");
      ini_set("smtp_port","25"); //25 should be your smtp port
      ini_set("sendmail_from"," '.$email.'"); 


      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

      // More headers

     // $headers .= 'To:' . $name . ' <' . $email . '>' . "\r\n";
		$headers .= 'From:  < '.$email.'  >' . "\r\n";
      //$headers .= 'From: <>' . "\r\n";
      $to  = 'sreekuttan8606@gmail.com';
      

      // send email 
      $success = wp_mail($to, $subject, $message,$headers);

     //exit;
                              
          if($success)
          {
             
                  echo "<script type='text/javascript'> //not showing me this
                          alert('Successfully Submittted');

                         header('Location: http://localhost/wordpress/home/');
                          //window.location.replace(\"home.php\");
                      </script>";
             
          } else
          
          {
              
                  echo "<script type='text/javascript'> //not showing me this
                          alert('Something Went Wrong!!!');
                      </script>";
            
          }
      
          

  }
              
          

} 
  // end my_theme_send_email
  add_action( 'init', 'contact_form' );









 