<?php
    register_post_type( 'bv_theme_slider',

        array(
            'labels' => array(
                'name' => 'BV Slider',
                'singular_name' => 'BV Slider',
                'add_new' => 'Add New Slide',
                'add_new_item' => 'Add New Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view' => 'View Slide',
                'view_item' => 'View Slide',
                'search_items' => 'Search Slide',
                'not_found' => 'No Slides found',
                'not_found_in_trash' => 'No Slide found in Trash',    
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-format-image',
            'has_archive' => true
        )

    );