<?php
add_action('after_setup_theme' , 'wp_car_action');
function wp_car_action(){
add_theme_support('post-formats',array('video','audio','aside','gallery'));
add_theme_support('post-thumbnails');
}
add_action('wp_enqueue_scripts' , 'wp_car_enqueue');
function wp_car_enqueue(){
    wp_enqueue_style('master' , get_template_directory_uri().'/css/master.css');
    wp_enqueue_style('core' , get_stylesheet_uri() );

    wp_enqueue_script('Bootsrap' , get_template_directory_uri().'/js/bootstrap.min.js' , array('jquery') , 2.0,true);
    wp_enqueue_script( 'Wow', get_template_directory_uri().'/js/wow.min.js', array('jquery'), 2.0 , true);
    wp_enqueue_script('Carousel' , get_template_directory_uri().'/js/owlcarousel/owl.carousel.min.js' , array('jquery') , 2.0,true);
    wp_enqueue_script( 'jQuery-ui', get_template_directory_uri().'/js/jquery-ui.min.js', array('jquery'), 2.0 , true);
    wp_enqueue_script('jQuery-counter' , get_template_directory_uri().'/js/waypoints.min.js' , array('jquery') , 2.0,true);
    wp_enqueue_script( 'jQuery-counter-up', get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery'), 2.0 , true);
    wp_enqueue_script('Carousel' , get_template_directory_uri().'/js/accordian-a2r.js' , array('jquery') , 2.0,true);
    wp_enqueue_script( 'hero-menu', get_template_directory_uri().'/js/jquery-ui.min.js', array('jquery'), 2.0 , true);
   
    wp_enqueue_script( 'hero-menu-up', get_template_directory_uri().'/js/jquery.meanmenu.js', array('jquery'), 2.0 , true);
    wp_enqueue_script('Skillbar' , get_template_directory_uri().'/js/skill.bars.jquery.js' , array('jquery') , 2.0,true);
    wp_enqueue_script( 'mixit-up-control', get_template_directory_uri().'/js/filterize-controls.js', array('jquery'), 2.0 , true);
    wp_enqueue_script('mixit-up' , get_template_directory_uri().' /js/jquery.filterizr.min.js' , array('jquery') , 2.0,true);
    wp_enqueue_script( 'magnific', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), 2.0 , true);
    wp_enqueue_script( 'Custom', get_template_directory_uri().'/js/custom.js', array('jquery'), 2.0 , true);
    
    }
function wp_car_menu() {
    if(function_exists('register_nav_menu')){
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Feader Menu' ));
    }
}
add_action( 'init', 'wp_car_menu' );