<?php
add_action('after_setup_theme' , 'wp_car_action');
function wp_car_action(){
add_theme_support('post-formats',array('video','audio','aside','gallery'));
}
?>