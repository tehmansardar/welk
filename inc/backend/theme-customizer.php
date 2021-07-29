<?php

function welk_customize_register($wp_customize)
{

    $wp_customize->add_panel('welk', [
        'title'             =>      __('Welk Settings', 'invm'),
        'description'       =>      '<p>Welk Theme Settings</p>',
        'priority'          =>      160
    ]);


    welk_info_customizer_section($wp_customize);
}
