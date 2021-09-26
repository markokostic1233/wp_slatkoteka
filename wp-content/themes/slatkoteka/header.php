<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slatkoteka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="small-device.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    
    <?php wp_enqueue_script("jquery"); ?>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	

<header id="masthead" class="site-header" >
     <div class="container sss">
            <div class="row header"> 
            <div class="col-3 hamb">
                   <a class="hamburger" id="hamburger">
                      <i onclick="myFunction(this)" class="fa fa-bars"></i> <span class="for-menu"> meni </span>
</a>   
               </div>
			      <div id="logo-first" class="col-5 col-md-2">
                        <a href="#" class="custom-logo-link" rel="home" aria-current="page">
                           <img class="logo-sltkoteka" src="https:/slatkoteka/wp-content/uploads/2021/09/group-11.png" sizes="(max-width: 257px) 100vw, 257px">
                        </a>      
				  </div>
                  <div class="col-4 for-mobile">
                        <p class="srb-active"> <span style="color:#f650a0">SRB</span> / ENG</p>
                  </div>


                  <div class=" col-12 col-md-8 menu-col">
				  
				      <?php wp_nav_menu( 
	                    array( 
		                  'theme_location' => 'my-custom-menu',
	                      'menu_class' => 'my-custom-menu'
                    	) 
                      );   ?>  
  
		   	      </div>

                  <div class="col-md-2 desk">
                        <p class="srb-active"> <span style="color:#f650a0">SRB</span> / ENG</p>
                  </div>
			</div>		 
	 </div>
</header>

<script>

jQuery(document).ready(function($) {

$('#hamburger').on('click', function () {
    $(".my-custom-menu").slideToggle('fast');
    if ($(window).width() > 767) {

      $(".my-custom-menu").css("display", "flex");

    }
  });

$(document).ready(function () {
    $(window).resize(function () {

      if ($(window).width() > 767) {

       $(".my-custom-menu").css("display", "flex");

      } else {

         $(".my-custom-menu").css("display", "none");

       }
    
    });
 });




});



</script>