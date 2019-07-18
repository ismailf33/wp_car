<?php get_header();?>
<?php get_template_part('slider');?>
    <!-- News / Blog section  
    ============================================= -->
<div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
            <div class="row">
    <div class="col-md-12">
        <div class="profile-information-area">
        <div class="row">
        <!-- Profile-information-area-right -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <div class="profile-information-area-left">
                 <h4><?php the_author();?></h4>
                 <img src="" alt="">
                 <p><?php the_author_meta('description');?></p> 
                 <div class="profile-basic-information">
                    <ul>
                        <li> <span></span></li>
                        <li> <span></span></li>
                        <li><a href=""></a> </li>
                        <li><a href=""></a> </li>
                    </ul>
                 </div>
             </div>   
            </div>
        <!-- Profile-information-area-right -->
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="profile-information-area-right">
                <div class="author-recent-post">
                 <p>
                     <img src="" alt="">
                </p>
                 
                    <div class="author-post-info">
                        <ul>
                            <li><a href=""></a> </li>
                            <li><a href=""></a> </li>
                            <li><a href=""></a> </li>
                            <li><a href=""></a> </li>
                        </ul>
                    </div>
                 </div>
             </div>   
            </div>
        </div>
    </div>   
</div>
</div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                    <?php 
                        if(have_posts()){
                        while(have_posts()){ 
                    the_post();    ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><?php the_post_thumbnail( 'myThumb',array('class' => 'post-thumb' )); /*----this class using for image style-----*/?></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i><?php the_author();?></li>
                                                <li><i class="fa fa-calendar"></i><?php the_date();?></li>
                                                <li><i class="fa fa-comment"></i><?php
                                                comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link');
                                                ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <div class="text-des">                                    
                                        <?php the_content();?>                                     
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a  class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> <?php the_time('F j , y');?> </a>                  </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink()?>">Read More</a>
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
