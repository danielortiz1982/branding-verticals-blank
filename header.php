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
                color: <?php echo esc_attr(get_option('body_txt_color_opt')); ?>;
                font-size: <?php echo esc_attr( get_option('body_txt_size_opt') ); ?>px;
            }
            a{
                color:<?php echo esc_attr(get_option('anchor_color_opt')); ?>;
                color: <?php echo esc_attr( get_option('anchor_color_opt') ); ?>px;
            }
        </style>

        <style type="text/css">
            <?php echo esc_attr( get_option('custom_css') ); ?>
        </style>
    </head>

    <body <?php body_class(); ?>>
        <header class="header">
            <section class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="<?php echo get_home_url(); ?>">
                                <?php if(esc_attr( get_option('header_logo_opt') ) == '') : ?>
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png">
                                <?php else: ?>
                                    <img class="img-fluid" src="<?php echo esc_attr( get_option('header_logo_opt') ); ?>">
                                <?php endif ?>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <nav class="header-nav navbar navbar-expand-md">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="main-menu">
                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'container' => false,
                                            'menu_class' => '',
                                            'fallback_cb' => '__return_false',
                                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                            'depth' => 2,
                                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                                        ));
                                    ?>
                                </div>
                                <div class="social-search">
                                    <div class="footer-social">
                                        <?php if(esc_attr( get_option('social_facebook_opt') ) != '') : ?>
                                            <a target="_blank" href="<?php echo esc_attr( get_option('social_facebook_opt') ); ?>"><i class="fab fa-facebook-square"></i></a>
                                        <?php endif ?>

                                        <?php if(esc_attr( get_option('social_twitter_opt') ) != '') : ?>
                                            <a target="_blank" href="<?php echo esc_attr( get_option('social_twitter_opt') ); ?>"><i class="fab fa-twitter-square"></i></a>
                                        <?php endif ?>

                                        <?php if(esc_attr( get_option('social_youtube_opt') ) != '') : ?>
                                            <a target="_blank" href="<?php echo esc_attr( get_option('social_youtube_opt') ); ?>"><i class="fab fa-youtube-square"></i></a>
                                        <?php endif ?>

                                        <?php if(esc_attr( get_option('social_instagram_opt') ) != '') : ?>
                                            <a target="_blank" href="<?php echo esc_attr( get_option('social_instagram_opt') ); ?>"><i class="fab fa-instagram"></i></a>
                                        <?php endif ?>

                                        <?php if(esc_attr( get_option('social_linkedin_opt') ) != '') : ?>
                                            <a target="_blank" href="<?php echo esc_attr( get_option('social_linkedin_opt') ); ?>"><i class="fab fa-linkedin"></i></a>
                                        <?php endif ?>

                                        <?php if(esc_attr( get_option('social_email_opt') ) != '') : ?>
                                            <a target="_blank" href="<?php echo esc_attr( get_option('social_email_opt') ); ?>"><i class="fas fa-envelope-square"></i></a>
                                        <?php endif ?>
                                    </div>
                                    <form class="d-flex">
                                        <?php get_search_form(); ?> 
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
        </header>