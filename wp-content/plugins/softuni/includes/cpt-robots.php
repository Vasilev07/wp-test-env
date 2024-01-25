<?php

function su_robots_type() {
    $labels = array(
        'name'                  => _x( 'Robots', 'Post type general name', 'softuni' ),
        'singular_name'         => _x( 'Robot', 'Post type singular name', 'softuni' ),
        'menu_name'             => _x( 'Robots', 'Admin Menu text', 'softuni' ),
        'name_admin_bar'        => _x( 'Robot', 'Add New on Toolbar', 'softuni' ),
        'add_new'               => __( 'Add New', 'softuni' ),
        'add_new_item'          => __( 'Add New Robot', 'softuni' ),
        'new_item'              => __( 'New Robot', 'softuni' ),
        'edit_item'             => __( 'Edit Robot', 'softuni' ),
        'view_item'             => __( 'View Robot', 'softuni' ),
        'all_items'             => __( 'All Robots', 'softuni' ),
        // 'search_items'          => __( 'Search Robots', 'softuni' ),
        // 'parent_item_colon'     => __( 'Parent Robots:', 'softuni' ),
        // 'not_found'             => __( 'No Robots found.', 'softuni' ),
        // 'not_found_in_trash'    => __( 'No Robots found in Trash.', 'softuni' ),
        // 'featured_image'        => _x( 'Robot Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni' ),
        // 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni' ),
        // 'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni' ),
        // 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni' ),
        // 'archives'              => _x( 'Robot archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni' ),
        // 'insert_into_item'      => _x( 'Insert into Robot', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni' ),
        // 'uploaded_to_this_item' => _x( 'Uploaded to this Robot', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni' ),
        // 'filter_items_list'     => _x( 'Filter Robots list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni' ),
        // 'items_list_navigation' => _x( 'Robots list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni' ),
        // 'items_list'            => _x( 'Robots list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'revisions',
        ),
        // 'show_in_rest'       => true
    );

    register_post_type( 'robot', $args );
}

add_action( 'init', 'su_robots_type' );