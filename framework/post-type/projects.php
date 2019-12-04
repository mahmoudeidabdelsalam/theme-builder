<?php

// Register projects custom Post Type
function projects_post_type() {

    $labels = array(
        'name' => _x('Projects', 'Post Type General Name', 'builder-post-type'),
        'singular_name' => _x('Projects', 'Post Type Singular Name', 'builder-post-type'),
        'menu_name' => __('Projects', 'builder-post-type'),
        'parent_item_colon' => __('Parent Item:', 'builder-post-type'),
        'all_items' => __('All projects', 'builder-post-type'),
        'view_item' => __('View Project', 'builder-post-type'),
        'add_new_item' => __('Add New Project', 'builder-post-type'),
        'add_new' => __('Add Project', 'builder-post-type'),
        'edit_item' => __('Edit Project', 'builder-post-type'),
        'update_item' => __('Update Project', 'builder-post-type'),
        'search_items' => __('Search Project', 'builder-post-type'),
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
        'menu_icon' => 'dashicons-editor-insertmore',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,

    );
    register_post_type('project', $args);
}

// Hook into the 'init' action
add_action('init', 'projects_post_type', 0);
