<?php
add_action('after_setup_theme' , 'wp_car_action');
function wp_car_action(){
    add_theme_support('post-formats',array('video','audio','aside','gallery'));
    add_theme_support('post-thumbnails' , array('post' , 'page','slider-items'));
    set_post_thumbnail_size( 200, 200, true );
    add_image_size( 'myThumb', 400, 400 );
    add_image_size('slider-items', 1900, 900);
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
$comment_field = $fields['comment'];
unset($fields['comment']);
$fields['comment'] = $comment_field;
return $fields;
}
add_action('comment_form_fields', 'commnets_move_top_to_bottom'); 


function commnets_field_remove($fields){
// unset($fields['email'] );
// unset($fields['author'] );
 unset($fields['url'] );
// unset($fields['comment'] );
return $fields;
}
add_action('comment_form_fields', 'commnets_field_remove'); 

function show_extra_profile_fields($user){ ?>
<h3>Extra profile information</h3>
<table class="form-table">
<tr>
    <th><label for="facebook">Facebook</label></th>
    <td>
        <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook' , $user->ID));?>" class="regular-text"> <br>
        <span class="description">Please enter your facebook profile link . [e.g http:// www.facebook.com/ismail.alif]</span>
    </td>
</tr>
<tr>
    <th><label for="facebook">Twitter</label></th>
    <td>
        <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter' , $user->ID));?>" class="regular-text"> <br>
        <span class="description">Please enter your twitter profile link . [e.g http:// www.twitter.com/ismail.alif]</span>
    </td>
</tr>
<tr>
    <th><label for="facebook">Linkedin</label></th>
    <td>
        <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr(get_the_author_meta('linkedin' , $user->ID));?>" class="regular-text"> <br>
        <span class="description">Please enter your linkedin profile link . [e.g http:// www.linkedin.com/ismail.alif]</span>
    </td>
</tr>

</table>
<?php }
add_action('show_user_profile', 'show_extra_profile_fields');
function save_extra_profile_fields($user_id){
    if( !current_user_can('edit_user' , $user_id))
    return false;
    update_user_meta( $user_id, 'facebook', $_POST['facebook']);
    update_user_meta( $user_id, 'twitter', $_POST['twitter']);
    update_user_meta( $user_id, 'linkedin', $_POST['linkedin']);
}
add_action('personal_options_update', 'save_extra_profile_fields');
add_action('edit_user_profile_update', 'save_extra_profile_fields');



add_action('init', 'slider_gallery');
function slider_gallery() {
     register_post_type( 'slider-items', 
     array(
         'labels' => array(
        'name' => __('Slider'),
        'singular_name' => __('Slider'),
        'menu_name' => _( 'Slider'), 
        'name_admin_bar' => __( 'Add Slider' ), 
        'all_items' =>__( 'All Slider' ),
        'add_new' => _( 'Add Slider' ), 
        'add_new_item' => __( 'Add Slider' ),
        'edit_item' => __( 'Edit Slider' ), 
        'new_item' => __('New Slider' ), 
        'view_item' => __( 'View Slider' ), 
        'search_items' => __('Search Slider')
         ),
    'public' => true, 
    'has_archive' => true, 
    'rewrite' => array( 'slug' => 'slider-item' ), 
    'menu_position' => 2, 
    'menu_icon' => 'dashicons-products', 
    'supports' => array( 'title', 'thumbnail', 'editor' )));
 }
// Enabling Custom Post Taxonomy (Slider gallery)
function slider_gallery_taxonomy() { 
    register_taxonomy(
    'slider_cat', //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
    'slider-items', //post type name 
    array(
    'hierarchical' => true, 
    'label' => 'Slider Category', //Display name 
    'query_var' => true, 
    'rewrite' => array(
    'slug' => 'slider-category', // This controls the base slug that will display before each term 
    'with_front' => true // Don't display the category base before
            )
        )
    );
}  
add_action( 'init', 'slider_gallery_taxonomy');

//Custom meta-box
function slider_custom_meta(){
 add_meta_box( 'slider_meta', __('Others section' , 'carnews'), 'slider_meta_callback' , 'slider-items');   
}
add_action('add_meta_boxes' , 'slider_custom_meta');
//Field
function slider_meta_callback($post ) {
    wp_nonce_field( basename( __FILE__), 'slider_nonce');
     $slider_stored_meta = get_post_meta( $post->ID);
?>
<input type="text" name="meta-subtitle-slider" value="
<?php if ( isset ($slider_stored_meta['meta-subtitle-slider'] ) ){ echo $slider_stored_meta['meta-subtitle-slider'][0]; }?>" 
style=" width: 100%; font-size: 16px; margin-bottom:20px;" placeholder="Enter Sub Title Here">

<?php
}
//save field value 
function slider_meta_save( $post_id ){
// Checks save status 
$is_autosave = wp_is_post_autosave( $post_id );
$is_revision = wp_is_post_revision ($post_id); 
$is_valid_nonce = ( isset($_POST[ 'slider_nonce'] ) && wp_verify_nonce( $_POST[ 'slider_nonce'
], basename( __FILE__))) ? 'true': 'false';
// Exits script depending on save status 
if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
return;
}
if(isset($_POST['meta-subtitle-slider'])){
    update_post_meta( $post_id, 'meta-subtitle-slider', sanitize_text_field($_POST['meta-subtitle-slider']));
    }
}
add_action('save_post' , 'slider_meta_save');

/*

function basic_shortcode($atts , $content = null){
return('<span style="background:red; color:green;">'.$content.'</span>');
}
add_shortcode('basic' , 'basic_shortcode'); 

function youtube_shortcode($atts , $content = null){
    extract(shortcode_atts(array("video_id " =>'', "width" => '',"height" => ''), $atts) );
 ?>   
    <iframe width="<?php echo $width ;?>" height="<?php echo $height ;?>" src="https://www.youtube.com/embed/<?php echo $video_id;?>" 
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
<?php        
}
add_shortcode('youtube' , 'youtube_shortcode');

?>
<style>
.boxes{
    background:red; 
    color:green;
}
</style>
<?php
function class_shortcode($atts , $content = null){
    return('<div class="boxes">'.$content.'</div>');
}
add_shortcode('class' , 'class_shortcode');
*/
add_filter('show_admin_bar' , '__return_false');
add_filter('show_admin_bar' , '__return_false');
function remove_customize_page(){
global $submenu;
unset($submenu['themes.php'][6]); //Remove customize link
}
add_action('admin_menu' , 'remove_customize_page');
