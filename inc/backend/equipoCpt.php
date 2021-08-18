<?php

/**
 *
 * @package welk
 */

function welk_equipo_cpt()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Equipos', 'Post Type General Name', 'welk'),
        'singular_name' => _x('Equipo', 'Post Type Singular Name', 'welk'),
        'menu_name' => __('Equipos', 'welk'),
        'parent_item_colon' => __('Parent Equipos', 'welk'),
        'all_items' => __('All Equipos', 'welk'),
        'view_item' => __('View Equipos', 'welk'),
        'add_new_item' => __('Add New Equipos', 'welk'),
        'add_new' => __('Add Equipos', 'welk'),
        'edit_item' => __('Edit Equipos', 'welk'),
        'update_item' => __('Update Equipos', 'welk'),
        'search_items' => __('Search Equipos', 'welk'),
        'not_found' => __('Not Found', 'welk'),
        'not_found_in_trash' => __('Not found in Trash', 'welk'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('equipos', 'welk'),
        'description' => __('Equipos', 'welk'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-groups',
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
    );

    // Registering your Custom Post Type
    register_post_type('welk-equipo', $args);
}
