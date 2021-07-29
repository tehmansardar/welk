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