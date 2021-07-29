<?php

/**
 *
 * @package welk
 */

function welk_register_nav_menu()
{
    register_nav_menus([
        'footer' => esc_html(__('Footer Navigation Menu')),
        'header' => esc_html(__('Header Navigation Menu'))
    ]);
}
