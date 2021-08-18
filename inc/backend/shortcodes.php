<?php

// About Connectivity shortcode
function welk_accordion($atts, $content = null)
{

    //[welk_accordian]

    //get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'welk_accordion'
    );

    //return HTML
    ob_start();
    include get_theme_file_path('/inc/frontend/welk_accordion.php');
    return ob_get_clean();
}

function welk_nav($atts, $content = null)
{

    //[welk_nav]

    //get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'welk_nav'
    );

    //return HTML
    ob_start();
    include get_theme_file_path('/inc/frontend/welk-nav.php');
    return ob_get_clean();
}

function welk_solutions($atts, $content = null)
{

    //[welk_solutions]

    //get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'welk_solutions'
    );

    //return HTML
    ob_start();
    include get_theme_file_path('/inc/frontend/welk-solution.php');
    return ob_get_clean();
}

function welk_equipo($atts, $content = null)
{

    //[welk_equipo]

    //get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'welk_equipo'
    );

    //return HTML
    ob_start();
    include get_theme_file_path('/inc/frontend/welk-equipo.php');
    return ob_get_clean();
}
