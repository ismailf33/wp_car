<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="CarCare  -  Car Repairing  and Servicing Html Template Responsive Template">
    <meta name="keywords" content="Repair ,Servicing ,Mechanic">
    <meta name="author" content="Theme Moor">
    <!-- Page Title -->
    <title> <?php bloginfo('name'); ?> </title>
    <!-- Apple Touch Icons &Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php 
if(is_singular() && comments_open() && get_option('thread_comments')){
wp_enqueue_scripts('comment_replay');
}
?>
<?php wp_head();?>
</head>

<body class="home" <?php body_class();?>>
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->
    <header id="header_area" class="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="header_top_bar_content">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 company">
                            <div class="company-info">
                                <ul>
                                    <li><i class="flaticon-close-envelope"></i><a href="#"><?php echo get_theme_mod('Header_email');?></a></li>
                                    <li><i class="flaticon-telephone"></i><a href="#"><?php echo get_theme_mod('Header_phone');?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 social">
                         <?php get_search_form();?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_area">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <a href="<?php bloginfo( 'url' );  //  site_url('/');  esc_url(home_url('/'));?>"><img src="<?php echo get_theme_mod('logo');?>" alt=""></a>
                            <div class="responsive-menu"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrapper">
                                <nav class="main-navigation">                                
                                    <?php
                                    wp_nav_menu( array(
                                    'theme_locaiton ' => 'header-menu',
                                    'container_class' => 'main-navigation',
                                    'items_wrap' => '<ul class="main-menu">%3$s</ul>' //can't understand....
                                    ));                               
                                    ?>                                 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->