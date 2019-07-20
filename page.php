<?php get_header();?> 
<?php
if(have_posts()){
while(have_posts()){
    the_post();   
?>  
<section id="banner-wrap"  class="banner-section">
<div class="banner-section-overlay"></div>
    <div class="banner-section-text">
        <div class="banner-text-inner">
            <h2><?php the_title();?></h2>
            <div class="bradcome">
                <ul>
                    <li><a href="<?php esc_url(home_url('/'));?>">Home</a></li>
                    <li><i class="fa fa-long-arrow-right "></i></li>
                    <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
<?php }} ?> 

   <!-- News  Blog section  -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                <?php
                if(have_posts()){
                while(have_posts()){
                 the_post();   
                ?>    
                    <div class="single-page-details">
                        <h2><?php the_title();?> </h2>                      
                        <h2><?php the_content();?></h2>
                    </div>
                <?php }} else{?> 
            <h2 style="text-align:center;"> No post here !!!  </h2>        
                <?php }  ?>    										                   
                </div>
    <?php //get_template_part('sidebar');?>         
            </div>
        </div>
    </div>
    <!-- /news table  -->
<?php get_footer();?>    
   