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