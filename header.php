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
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/bv-logo.png">
                </a>
            </div>
            <nav class="header-navigation">
                 <?php wp_nav_menu(); ?>
            </nav>
            <div class="header-social">
                <a target="_blank" href="https://www.facebook.com/brandingverticalsllc/"><i class="fab fa-facebook-square"></i></a>
                <a target="_blank" href="https://twitter.com/BVerticals"><i class="fab fa-twitter-square"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCCH1FRqjFuD3f9sUCZlL03g"><i class="fab fa-youtube-square"></i></a>
                <a target="_blank" href="mailto:dortiz@brandingverticals.com"><i class="fas fa-envelope-square"></i></a>
            </div>
        </header>