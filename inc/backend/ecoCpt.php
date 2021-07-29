<?php

/**
 *
 * @package welk
 */

function welk_eco_cpt()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Ecos', 'Post Type General Name', 'welk'),
        'singular_name' => _x('Eco', 'Post Type Singular Name', 'welk'),
        'menu_name' => __('Ecos', 'welk'),
        'parent_item_colon' => __('Parent Ecos', 'welk'),
        'all_items' => __('All Ecos', 'welk'),
        'view_item' => __('View Ecos', 'welk'),
        'add_new_item' => __('Add New Ecos', 'welk'),
        'add_new' => __('Add Ecos', 'welk'),
        'edit_item' => __('Edit Ecos', 'welk'),
        'update_item' => __('Update Ecos', 'welk'),
        'search_items' => __('Search Ecos', 'welk'),
        'not_found' => __('Not Found', 'welk'),
        'not_found_in_trash' => __('Not found in Trash', 'welk'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('welk', 'welk'),
        'description' => __('Ecos', 'welk'),
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
        'menu_icon' => 'dashicons-welcome-add-page',
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    // Registering your Custom Post Type
    register_post_type('welk-eco', $args);
}
