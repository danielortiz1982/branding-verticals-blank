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
    </head>

    <body <?php body_class(); ?>>
        <header class="header">
            <section class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo"><a href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png"></a></div>
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
                                <form class="d-flex">
                                    <?php get_search_form(); ?> 
                              </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </section>
        </header>