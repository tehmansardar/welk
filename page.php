<?php

/**
 * The template for displaying Home page
 *
 *
 * @package welk
 */

get_header();


if (have_posts()) {
    while (have_posts()) {
        the_post();

?>
        <section class="contents">
            <?php the_content(); ?>
        </section>

<?php
    }
}
get_footer();
