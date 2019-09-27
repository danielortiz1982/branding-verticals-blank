<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>

        <style type="text/css">

            

 
            h1, h2, h3, h4, h5, h6{
                color: <?php echo esc_attr( get_option('header_color_opt') ); ?>;
            }
            h1{
                font-size: <?php echo esc_attr( get_option('header_size_opt') ); ?>px;
            }
            h2{
                font-size: <?php echo esc_attr( get_option('subheader_size_opt') ); ?>px;
            }
            p{
                font-size: <?php echo esc_attr( get_option('body__txt_size_opt') ); ?>px;
            }
            a{
                color: <?php echo esc_attr( get_option('anchor_color_opt') ); ?>;
            }
            .dropdown-menu{
                background-color: <?php echo esc_attr( get_option('nav_color_opt') ); ?>;
            }
            .navigation-box .header-nav a{
               color: <?php echo esc_attr( get_option('nav_txt_color_opt') ); ?>;
            }
            #header-navigation{
                background-color: <?php echo esc_attr( get_option('nav_color_opt') ); ?>;
            }
            .header-nav{
                background-color: transparent;
            }

            @media screen and (min-width: 768px) {
                .header-nav{
                    background-color: <?php echo esc_attr( get_option('nav_color_opt') ); ?>;
                    
                }
            }



        </style>
    </head>

    <body <?php body_class(); ?>>
        <div class="wrapper">
            <header class="site-header">
                <div class="container">
                    <div class="header-logo"><a href="/wp-sandbox"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png"></a></div>
                    <h1 class="header-title"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                    <h2 class="header-description"><?php echo get_bloginfo('description'); ?></h2>
                </div>
            </header>
            <div class="navigation-box">
                <nav class="container">
                    <nav class="navbar navbar-expand-md header-nav" role="navigation">
                        <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#header-navigation" aria-controls="header-navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="navbar-brand header-logo"><a href="/wp-sandbox"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png"></a></div>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'header-navigation',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                        </div>
                    </nav>
                </nav>
            </div>