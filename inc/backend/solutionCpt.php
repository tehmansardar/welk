<?php

/**
 *
 * @package welk
 */

function welk_solution_cpt()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Solutions', 'Post Type General Name', 'welk'),
        'singular_name' => _x('Solution', 'Post Type Singular Name', 'welk'),
        'menu_name' => __('Solutions', 'welk'),
        'parent_item_colon' => __('Parent Solutions', 'welk'),
        'all_items' => __('All Solutions', 'welk'),
        'view_item' => __('View Solutions', 'welk'),
        'add_new_item' => __('Add New Solutions', 'welk'),
        'add_new' => __('Add Solutions', 'welk'),
        'edit_item' => __('Edit Solutions', 'welk'),
        'update_item' => __('Update Solutions', 'welk'),
        'search_items' => __('Search Solutions', 'welk'),
        'not_found' => __('Not Found', 'welk'),
        'not_found_in_trash' => __('Not found in Trash', 'welk'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('welk', 'welk'),
        'description' => __('Solutions', 'welk'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-buddicons-groups',
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'menu_position' => 6,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    // Registering your Custom Post Type
    register_post_type('welk-solution', $args);
}
