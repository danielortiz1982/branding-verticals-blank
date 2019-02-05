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
        <div class="wrapper">
            <header class="site-header">
                <div class="container">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <h2><?php echo get_bloginfo('description'); ?></h2>
                    <hr />
                </div>
            </header>
            <div class="navigation-box">
                <nav class="container">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'header-menu' ) ); ?>
                </nav>
            </div>