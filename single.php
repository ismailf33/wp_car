<?php get_header();?>
<?php get_template_part('slider');?>
    <!--Main Slider-->
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
            <div class="item" style="background-image:url(images/resource/home-slide-1.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-2.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-3.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-4.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-5.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End -->

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

                                
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                            <img class="img-responsive" title="Tooltip on left" src="images/resource/blog-2.jpg" alt="">                                            <h2><a href="">He travels to Indonesia. He stays there for 9 days. ruhul</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>
                                        
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                            <img class="img-responsive" title="Tooltip on left" src="images/resource/blog-2.jpg" alt="">                                            <h2><a href="">Saudi king to visit Indonesia in 50 years.</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>                                                                                
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                             <img class="img-responsive" title="Tooltip on left" src="images/resource/blog-2.jpg" alt="">                                            <h2><a href="">Gilded (covered in gold), arrive (come somewhere)</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>                                                                                                               
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="bio-info-area">
                                <h4><span>Author : </span> <a href="http://localhost/mywordpress/blog/author/admin/" title="Posts by Ruhul amin" rel="author">Ruhul amin</a> <strong>Total post : 14</strong></h4>
                                <img alt="" src="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g" srcset="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g 2x" class="avatar avatar-96 photo" width="96" height="96">                            
                                <p>Now testing Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.</p>
                                <div class="author-info">
                                    <ul>
                                        <li><a href="#">View Author All Post</a> </li>
                                        <li><a href="http://www.twitter.com/ruhul2s">Twitter</a> </li>
                                        <li><a href="http://www.facebook.com/ruhul2s">Facebook</a> </li>
                                        <li><a href="http://www.googlePlus.com/ruhul2s">Google Plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                                <div class="comment-list">
                                    <!-- First Comment -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <figure class="thumbnail">
                                                <img class="img-responsive" src="images/avatar.png" />
                                                <figcaption class="text-center">username</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                        <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Comment Reply -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                            <figure class="thumbnail">
                                                <img class="img-responsive" src="images/avatar.png" />
                                                <figcaption class="text-center">username</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                        <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-comment">
                                    <h4>Leave a reply</h4>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-item" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-item" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-item" rows="3" name="content" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Post comment</button>
                                    </form>
                                </div>
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
   