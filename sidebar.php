<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                            <form action="<?php echo home_url('/');?>" method="get">   
                                <input type="search" class="search-field" placeholder="Search" name="s" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>     
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                        <?php    
                            $args = array(
                                'orderby'  => 'slug',
                                'parent' => 0
                            );
                            $categories = get_categories($args);
                            foreach($categories as $category){ ?>
                            <li><a href="<?php echo get_category_link($category->term_id);?>"  rel="bookmark"><i class="fa fa-check"><?php echo $category->name;?></i> <?php echo $category->description;?></a></li>  
                        <?php } ?>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <li><a href="#">January 2017 <span>(15)</span></a></li>
                                <li><a href="#">Februaty 2017 <span>(112)</span></a></li>
                                <li><a href="#">March 2017 <span>(4)</span></a></li>
                                <li><a href="#">April 2017<span>(14)</span></a></li>
                                <li><a href="#">May 2017 <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">RECENT NEWS</h4>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-1.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-2.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-3.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition7s" href="#">HTML</a></li>
                                <li><a class="transition7s" href="#">CSS3</a></li>
                                <li><a class="transition7s" href="#">PHP</a></li>
                                <li><a class="transition7s" href="#">Wordpress</a></li>
                                <li><a class="transition7s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
       