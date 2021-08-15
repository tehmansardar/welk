<?php

/*
This is the template for the footer

@package welk
 */
// echo do_shortcode( '[welk_solutions]' );

?>
<footer>
    <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/wellk vertical naranja parcial.png" alt="welk logo" />
        <div class="footer-icons">
            <?php if (get_theme_mod('welk_facebook_handle')) { ?>
                <a href="<?php echo get_theme_mod('welk_facebook_handle');  ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <?php } ?>
            <?php if (get_theme_mod('welk_twitter_handle')) { ?>
                <a href="<?php echo get_theme_mod('welk_twitter_handle');  ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
            <?php } ?>
            <?php if (get_theme_mod('welk_instagram_handle')) { ?>
                <a href="<?php echo get_theme_mod('welk_instagram_handle');  ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            <?php } ?>
            <?php if (get_theme_mod('welk_linkedin_handle')) { ?>
                <a href="<?php echo get_theme_mod('welk_linkedin_handle');  ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
            <?php } ?>
            <!-- <a href="#"><i class=""></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a> -->
            <div class="line"></div>
        </div>
    </div>
    <div class="footer-links">
        <h4>Quick Links</h4>

        <?php
        wp_nav_menu([
            'theme_location'      => 'footer',
            'container'           => false,

        ]);
        ?>
        <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Equipo</a></li>
        </ul> -->
    </div>
    <div class="footer-contact">
        <h4>Contacto</h4>
        <div class="footer-info">
            <?php if (get_theme_mod('welk_phone_number')) { ?>
                <i class="fas fa-phone-alt"></i>
                <p><a href="tel:<?php echo get_theme_mod('welk_phone_number'); ?>"><?php echo get_theme_mod('welk_phone_number'); ?></a></p>
            <?php } ?>
        </div>
        <div class="footer-info">
            <?php if (get_theme_mod('welk_email')) { ?>
                <i class="fas fa-envelope"></i>
                <p>
                    <a href="mailto:<?php echo get_theme_mod('welk_email'); ?>"> <?php echo get_theme_mod('welk_email'); ?></a>
                </p>
            <?php } ?>
        </div>
    </div>
    <div class="location-wrapper">
        <div class="footer-location">
            <?php if (get_theme_mod('welk_address')) { ?>
                <i class="fas fa-map-marker-alt"></i>
                <p><?php echo get_theme_mod('welk_address'); ?></p>
            <?php } ?>
        </div>
    </div>

    <div class="footer-button">
        <a href="#">Get app</a>
    </div>
</footer>
<?php wp_footer(); ?>
<?php
if (is_front_page()) {
?>
    <script>
        jQuery(document).ready(function($) {
            var $nav = $('#welk-nav-fixed'),
                $win = $(window),
                winH = $win.height(); // Get the window height.

            $win
                .on('scroll', function() {
                    if ($(this).scrollTop() > winH) {
                        $nav.removeClass('main-nav').addClass('header-fixed');
                    } else {
                        $nav.addClass('main-nav');
                    }
                })
                .on('resize', function() {
                    // If the user resizes the window
                    winH = $(this).height(); // you'll need the new height value
                });
        });
    </script>
<?php } ?>


</body>

</html>