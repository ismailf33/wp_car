<?php get_header();?>  
   <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                <?php
                if(have_posts()){
                while(have_posts()){
                 the_post();   
                ?>    
                    <div class="single-page-details">
                        <h2><?php the_title();?></h2>                      
                        <h2><?php the_content();?></h2>
                    </div>
                <?php }} else{?> 
            <h2 style="text-align:center;"> No post here !!!  </h2>        
                <?php }  ?>
                <div class="row">
                        <div class="col-md-12">
                            <div class="related_post_area">
                                <h3>Related Posts</h3>
                                <?php
                                
                                
                                
                                ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                             <img class="img-responsive" title="Tooltip on left" src="<?php get_template_directory_uri();?>/images/resource/blog-2.jpg" alt="">                                            <h2><a href="">Gilded (covered in gold), arrive (come somewhere)</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>                                                                       
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                               <?php comments_template('',true);?>
                            </div>
                        </div>
                    </div>
                </div>
    <?php get_template_part('sidebar');?>         
            </div>
        </div>
    </div>
    <!-- /news table  -->
<?php get_footer();?>    
   