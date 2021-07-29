<?php

function welk_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = WELK_DEV ? time() : false;

    // Enqueue Style
    wp_register_style(
        'welk_fontAwesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
        [],
        $ver
    );

    wp_register_style(
        'welk_bootstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        [],
        $ver
    );

    wp_register_style('welk_css', $uri . '/css/style.css', [], $ver);

    // Register Styles
    wp_enqueue_style('welk_fontAwesome');
    wp_enqueue_style('welk_bootstrap');
    wp_enqueue_style('welk_css');


    // deregister Jquery
    // wp_deregister_script('jquery');

    // Register jQuery
    // wp_register_script(
    //     'welk_jQuery',
    //     'https://code.jquery.com/jquery-3.2.1.slim.min.js',
    //     [],
    //     $ver,
    //     true
    // );

    wp_register_script(
        'welk_bootstrapjs',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        [],
        $ver,
        true
    );



    // Enqueue Scripts

    // wp_register_script(
    //     'invm_popper',
    //     'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    //     [],
    //     $ver,
    //     true
    // );

    // Register Scripts
    // wp_enqueue_script('welk_jQuery');
    wp_enqueue_script('welk_bootstrapjs');
    // wp_enqueue_script('invm_bootstrap_js');
    // wp_enqueue_script('invm_bxslider_js');
    // wp_enqueue_script('invm_script_js');
    // wp_enqueue_script('invm_selectInput_js');
    // wp_enqueue_script('invm_parsley');
    // wp_enqueue_script('invm_dynamic_js');
}
