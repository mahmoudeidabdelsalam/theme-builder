<?php

// Register Custom Taxonomy
function sector_categories() {

    $labels = array(
        'name' => 'Sectors',
        'singular_name' => 'Sectors',
        'menu_name' => 'Sectors',
        'all_items' => 'All Sectors',
        'parent_item' => 'Parent sector',
        'parent_item_colon' => 'Parent sector:',
        'new_item_name' => 'New Item sector',
        'add_new_item' => 'Add New sector',
        'edit_item' => 'Edit sector',
        'update_item' => 'Update sector',
        'separate_items_with_commas' => 'Separate items with commas',
        'search_items' => 'Search Sectors',
        'add_or_remove_items' => 'Add or remove sector',
        'choose_from_most_used' => 'Choose from the most used Sectors',
        'not_found' => 'Not Found',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest'=>true,

    );
    register_taxonomy('sector', array('post','project', 'service'), $args);
}

// Hook into the 'init' action
add_action('init', 'sector_categories', 0);
