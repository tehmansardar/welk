<?php

function welk_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = WELK_DEV ? time() : false;

    // Enqueue Style
    wp_register_style(
        'welk_fontAwesome',
        'https://pro.fontawesome.com/releases/v5.2.0/css/all.css',
        [],
        $ver
    );

    wp_register_style(
        'welk_bootstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        [],
        $ver
    );

    wp_register_style('welk_owlcarousel_css', $uri . '/assets/owlcarousel/owl.carousel.min.css', [], $ver);
    wp_register_style('welk_owlcarousel_css_theme', $uri . '/assets/owlcarousel/owl.theme.default.min.css', [], $ver);
    wp_register_style('welk_css', $uri . '/css/style.css', [], $ver);

    // Register Styles
    wp_enqueue_style('welk_fontAwesome');
    wp_enqueue_style('welk_bootstrap');
    wp_enqueue_style('welk_owlcarousel_css');
    wp_enqueue_style('welk_owlcarousel_css_theme');
    wp_enqueue_style('welk_css');

    // if (is_front_page()) {

    // deregister Jquery
    wp_deregister_script('jquery');

    // // Register jQuery
    wp_register_script(
        'welk_jQuery',
        'https://code.jquery.com/jquery-3.2.1.slim.min.js',
        [],
        $ver,
        true
    );

    // Register Scripts
    wp_enqueue_script('welk_jQuery');
    // }

    wp_register_script(
        'welk_bootstrapjs',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        [],
        $ver,
        true
    );


    wp_register_script(
        'welk_owlcarousel_js',
        $uri . '/assets/owlcarousel/owl.carousel.min.js',
        [],
        $ver,
        true
    );

    wp_register_script(
        'welk_mainjs',
        $uri . '/js/main.js',
        [],
        $ver,
        true
    );


    // Enqueue Scripts
    wp_enqueue_script('welk_bootstrapjs');
    wp_enqueue_script('welk_owlcarousel_js');
    wp_enqueue_script('welk_mainjs');
}
