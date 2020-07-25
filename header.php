<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php echo get_bloginfo( 'name' ); ?></title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap 
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">-->
  <!-- slick slider 
  <link rel="stylesheet" href="plugins/slick/slick.css">-->
  <!-- themefy-icon
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css"> -->

  <!-- Main Stylesheet 
  <link href="css/style.css" rel="stylesheet">-->
   
  <!--Favicon-->

    
 

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>

</head>

<body>
<style>
.circle {
  width: 10px;
  height: 10px;
  border: 1px solid #fff;
  position: absolute;
  border-radius: 10px;

}
</style>


<script>
document.onmousemove = animateCircles; // circle follow mouse

var colors = ['#fffff', '#00000', '#ffffff']

function animateCircles(event) {
  var circle = document.createElement("div");
  circle.setAttribute("class", "circle");
  document.body.appendChild(circle); // adds function to body

  // adds motion
  circle.style.left = event.clientX + 'px';
  circle.style.top = event.clientY + 'px';

  // randomize color
  var color = colors[Math.floor(Math.random() * colors.length)];
  circle.style.borderColor = color;

  // adds animation
  circle.style.transition = "all 0.5s linear 0s";

  circle.style.left = circle.offsetLeft - 20 + 'px';
  circle.style.top = circle.offsetTop - 20 + 'px';

  circle.style.width = "50px";
  circle.style.height = "50px";
  circle.style.borderWidth = "5px";
  circle.style.opacity = 0;
}</script>

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">

  <?php 
    
    $custom_logo_id = get_theme_mod('custom_logo');

    $logo = wp_get_attachment_image_src($custom_logo_id ,' full');
    
    
    ?>

  <a class="navbar-brand font-tertiary h3" href="#"><img src="<?php echo $logo[0]; ?>" alt="Web Design Bahrain" class="logoimg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
     
        <?php 
        
        wp_nav_menu(

            array(

                'menu_class'      => 'navbar-nav ml-auto',
                
                'theme_location'  => 'primary_menu',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse text-center',
                'container_id'    => 'navigation',
                'before'          => '',
                'after'           => '',
                
                
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
                //'item_spacing'    => 'preserve'
            )
        );
            
            
        
        ?> 
      
    
  </nav>
</header>