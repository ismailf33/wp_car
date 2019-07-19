<?php get_header();?>
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                    <?php 
                        if(have_posts()){
                        while(have_posts()){ 
                            the_post();    ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">                                  
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <div class="text-des">                                    
                                        <?php the_content();?>                                     
                                        </div>

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                <?php  }} ?>                                      
                        <div class="col-md-12">
                           <?php the_posts_pagination(array('screen_reader_text' =>' '));?>
                        </div>
 
                    </div>
                </div> 
    <?php  get_template_part('sidebar');?>            
            </div>
        </div>
    </div>
    <!-- /news table  -->
  
 <?php get_footer();?>