<?php

/*
This is the template for the hedaer

@package welk
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name');
            wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Wellk.png" alt="welk" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-align-justify"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <?php
            wp_nav_menu([
                'theme_location'      => 'header',
                'container'           => false,
                'menu_class'          => 'navbar-nav ml-auto',
                'list_item_class'     => 'nav-item',
                // 'depth'            => 2,
                'link_class'       => 'nav-link',
            ]);
            ?>
        </div>
    </nav>