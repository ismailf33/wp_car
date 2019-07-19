    <!--Main Slider-->
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
<!-- custom post with meta box display -->
<?php
    global $post;
    $i=0; 
    $args = array('posts_per_page' => -1,'post_type' => 'slider-items','page' => $paged,'order' => 'DESC'); 
    $myposts = get_posts($args ); 
    foreach( $myposts as $post ) : setup_postdata($post); 
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-items');
    $i++;
    $this_id = get_the_ID(); 
    global $wpdb; 
    $m_name_subtitle = ''; 
    $tbl_postmeta = $wpdb->prefix."postmeta"; 
    $meta_name_subtitle = 'meta-subtitle-slider'; 
    $query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle' "; 
    $result = $wpdb->get_results($query_result); 
    foreach($result as $row){
    $m_name_subtitle = $row->meta_value;
    }
?>
    <div class="item" style="background-image:url(<?php echo $large_image_url[0];?>">
        <div class="overlay"></div>
        <div class="slide-description">
            <div class="animate-item">
                <h2><?php the_title();?></h2>
            </div>
            <div class="animate-item">
                <h3><?php echo  $m_name_subtitle; ?></h3>
            </div>
            <div class="animate-item">
                <a class="btn-2 btn btn-primary" href="<?php the_permalink();?>">Read more</a>
            </div>
        </div>
    </div>
<?php endforeach ;?>        
    </div>
</section>
    <!-- Slider End -->
