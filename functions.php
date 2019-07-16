<?php
add_action('after_setup_theme' , 'wp_car_action');
function wp_car_action(){
    add_theme_support('post-formats',array('video','audio','aside','gallery'));
    add_theme_support('post-thumbnails' , array('post' , 'page'));
    set_post_thumbnail_size( 200, 200, true );
    add_image_size( 'myThumb', 400, 400 );
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
add_action('init', 'wp_car_menu');

function wp_car_widgets(){
    register_sidebar(array(
    'name'          => esc_html__( 'Header widget', 'wp_car' ),
	'id'            => 'head_widget',    // ID should be LOWERCASE  ! ! !
	'before_widget' => '<div class="siderbar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="sidebar-widget-title">',
    'after_title'   => '</h4>' ));
    register_sidebar(array(
        'name'          => esc_html__( 'Footer First widget', 'wp_car' ),
        'description'          => esc_html__( 'Footer widget Here.......', 'wp_car' ),
        'id'            => 'foot_widget',    // ID should be LOWERCASE  ! ! !
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"> <div class="footer-widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h4>' ));
    }
add_action('widgets_init', 'wp_car_widgets');

function commnets_move_top_to_bottom($fields){
$comment_field = $fields['name'];
unset($fields['name']);
$fields['name'] = $comment_field;
return $fields;
}
add_action('comment_form_fields', 'commnets_move_top_to_bottom'); 

