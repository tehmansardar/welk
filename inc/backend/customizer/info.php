<?php

function welk_info_customizer_section($wp_customize)
{
    $wp_customize->add_setting('welk_facebook_handle', [
        'default'   =>  ''
    ]);

    $wp_customize->add_setting('welk_twitter_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting('welk_instagram_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting('welk_linkedin_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting('welk_address', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting('welk_email', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting('welk_phone_number', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_section('welk_info_section', [
        'title'     =>  __('Welk Contact Info', 'welk'),
        'priority'  =>  30,
        'panel'     => 'welk',
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_facebook_input',
        array(
            'label'          => __('Facebook Handle', 'welk'),
            'section'        => 'welk_info_section',
            'settings'       => 'welk_facebook_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_twitter_input',
        array(
            'label'                 =>  __('Twitter Handle', 'welk'),
            'section'               => 'welk_info_section',
            'settings'              => 'welk_twitter_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_instagram_input',
        array(
            'label'                 =>  __('Instagram Handle', 'welk'),
            'section'               => 'welk_info_section',
            'settings'              => 'welk_instagram_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_linkedin_input',
        array(
            'label'                 =>  __('LinkedIn Handle', 'welk'),
            'section'               => 'welk_info_section',
            'settings'              => 'welk_linkedin_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_address_input',
        array(
            'label'                 =>  __('Address', 'welk'),
            'section'               => 'welk_info_section',
            'settings'              => 'welk_address',
            'type'                  =>  'textarea'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_email_input',
        array(
            'label'                 =>  __('Email', 'welk'),
            'section'               => 'welk_info_section',
            'settings'              => 'welk_email',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'welk_social_phone_number_input',
        array(
            'label'                 =>  __('Phone Number', 'welk'),
            'section'               => 'welk_info_section',
            'settings'              => 'welk_phone_number',
            'type'                  =>  'text'
        )
    ));
}
