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
                <section class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="header-logo">
                                <div class="logo"><a href="/wp-sandbox"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png"></a></div>
                            </div>
                        </div>

                        <div class="col-9">
                            <div class="header-navbar">
                                <?php wp_nav_menu( array( 'bv_blank_menu' => 'header-menu' ) ); ?>
                                <div class="menu-toggle"><i class="fas fa-bars"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-menu-content">
                        <div class="mobile-menu">
                            <?php wp_nav_menu( array( 'bv_blank_menu' => 'header-menu' ) ); ?>
                        </div>
                    </div>
                </section>
            </header>
