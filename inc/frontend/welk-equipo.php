<?php

$args = array(
    'post_type' => 'welk-equipo',
    'no_found_rows' => true,
    'posts_per_page' => -1,
    'order' => 'DESC',
    'post_status' => 'publish',
);

$myQuery = new WP_Query($args);

if ($myQuery->have_posts()) {
?>

    <section class="equipo">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <?php

                while ($myQuery->have_posts()) {
                    $myQuery->the_post();

                ?>
                    <div class="row ml-0 mr-0">
                        <div class="col-md-6 col-sm-2">
                            <div style="
									max-height: 400px;
									overflow: hidden;
									border: 1px solid #ee7527;
								">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php echo __(get_the_title()); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label style="color: #ee7527"><?php echo __("Team"); ?></label>
                            <h1 style="color: #dddddd; font-size: 50px; font-weight: 600">
                                <?php echo __(get_the_title()); ?>
                            </h1>
                            <p style="color: #cccccc; font-weight: 300; line-height: 26px">
                                <?php echo __(get_the_content()); ?>
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
    wp_reset_postdata();
}
?>