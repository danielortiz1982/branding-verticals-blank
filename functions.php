<?php

add_action('after_setup_theme', 'branding_verticals_wp_blank');
function branding_verticals_wp_blank(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );	
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		));
	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		));

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bv_blank_menu' ),
		'footer' => esc_html__( 'Footer', 'bv_blank_menu' ),
		));
}
// end of branding_verticals_wp_blank

add_action('widgets_init', 'bv_blank_widgets_init');
function bv_blank_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'BV Widget', 'BV Widget' ),
		'id'            => 'bv-widget',
		'description'   => esc_html__( 'BV Widget', 'BV Widget' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		));
}
//end of bv_blank_widgets_init

add_action('wp_enqueue_scripts', 'bv_blank_scripts');
function bv_blank_scripts(){

	// CSS
	wp_enqueue_style( 'bv-style-reset', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/libs/css/bootstrap.v4/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/assets/libs/css/fontawesome-5.7.0/css/all.min.css' );
	wp_enqueue_style( 'bv-main-style', get_template_directory_uri() . '/assets/sass/css/main.css' );

	// JavaScript  
	wp_enqueue_script('bv-jquery-js', get_template_directory_uri() . '/assets/libs/js/jquery/jquery-3.3.1.slim.min.js', array(), false, true);
	wp_enqueue_script('bv-popper-js', get_template_directory_uri() . '/assets/libs/js/popper/popper.min.js', array(), false, true);
	wp_enqueue_script('bv-bootstrap-js', get_template_directory_uri() . '/assets/libs/js/bootstrap.v4/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('bv-fontawesome-js', get_template_directory_uri() . '/assets/libs/js/fontawesome-5.7.0/js/all.min.js', array(), false, true);
	wp_enqueue_script('bv-main-js', get_template_directory_uri() . '/assets/js/dist/bundle.js', array(), false, true);
	
}
// end of bv_blank_scripts

add_action('admin_enqueue_scripts', 'admin_style');
function admin_style() {
}
// end of admin_style

add_action('post_edit_form_tag', 'update_edit_form');
function update_edit_form() {
    echo ' enctype="multipart/form-data"';
}
// end of update_edit_form