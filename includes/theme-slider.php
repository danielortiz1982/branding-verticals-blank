<?php
    register_post_type( 'image_carousel',

        array(
            'labels' => array(
                'name' => 'Image Carousel',
                'singular_name' => 'Image Carousel',
                'add_new' => 'Add New Image',
                'add_new_item' => 'Add New Image',
                'edit' => 'Edit',
                'edit_item' => 'Edit Image',
                'new_item' => 'New Image',
                'view' => 'View Image',
                'view_item' => 'View Image',
                'search_items' => 'Search Image',
                'not_found' => 'No Images found',
                'not_found_in_trash' => 'No Image found in Trash',    
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-format-image',
            'has_archive' => true
        )

    );