<?php

/**
 *
 * @package welk
 */

// Setup
define('WELK_DEV', true);

// Includes
include get_theme_file_path('/inc/frontend/enqueue.php');
include get_theme_file_path('/inc/backend/menus.php');
include get_theme_file_path('/inc/backend/shortcodes.php');
include get_theme_file_path('/inc/backend/ecoCpt.php');
include get_theme_file_path('/inc/backend/theme-customizer.php');
include get_theme_file_path('/inc/backend/customizer/info.php');

// Hooks
add_action('wp_enqueue_scripts', 'welk_enqueue');

// ---- customizer
add_action('customize_register', 'welk_customize_register');

//  ----ecosystem cpt homepage
add_action('init', 'welk_eco_cpt', 0);

// Theme Features
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'welk_register_nav_menu');

// Shortcodes
add_shortcode('welk_accordion', 'welk_accordion');
