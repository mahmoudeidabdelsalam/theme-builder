<?php

// Register service custom Post Type
function service_post_type() {

    $labels = array(
        'name' => _x('service', 'Post Type General Name', 'builder-post-type'),
        'singular_name' => _x('service', 'Post Type Singular Name', 'builder-post-type'),
        'menu_name' => __('service', 'builder-post-type'),
        'parent_item_colon' => __('Parent Item:', 'builder-post-type'),
        'all_items' => __('All service', 'builder-post-type'),
        'view_item' => __('View service', 'builder-post-type'),
        'add_new_item' => __('Add New service', 'builder-post-type'),
        'add_new' => __('Add service', 'builder-post-type'),
        'edit_item' => __('Edit service', 'builder-post-type'),
        'update_item' => __('Update service', 'builder-post-type'),
        'search_items' => __('Search service', 'builder-post-type'),
        'not_found' => __('Not found', 'builder-post-type'),
        'not_found_in_trash' => __('Not found in Trash', 'builder-post-type'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','editor','revisions','thumbnail',),
        // 'taxonomies' => array(''),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-generic',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,

    );
    register_post_type('service', $args);
}

// Hook into the 'init' action
add_action('init', 'service_post_type', 0);
