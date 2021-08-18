<?php

$args = array(
    'post_type' => 'welk-solution',
    'no_found_rows' => true,
    'posts_per_page' => -1,
    'order' => 'ASC',
    'post_status' => 'publish',
);

$myQuery = new WP_Query($args);

if ($myQuery->have_posts()) {

    // $first_post = $myQuery->posts[0];
    //print_r($myQuery);

?>

    <section class="solutions" style="
				display: flex;
				justify-content: center;
				align-items: center;
			">
        <div class="owl-carousel owl-theme">
            <?php

            while ($myQuery->have_posts()) {
                $myQuery->the_post();

            ?>
                <div class="item" style="margin-right: 40px">
                    <div style="
							display: flex;
							flex-direction: column;
							align-items: center !important;
							/* justify-content: center !important; */
						">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="" style="width: 70px" />
                        <h3 style="
								margin: 30px 0px;
								color: #ffffff;
								font-size: 30px;
								font-weight: 500;
							">
                            <?php echo __(get_the_title()); ?>
                        </h3>
                        <div style="
								display: flex;
								align-items: center;
								text-align: center;
								background-color: rgba(255, 255, 255, 0.1);
								padding: 50px !important;
								height: 400px;
								border-radius: 20px;
								overflow: hidden;
							">
                            <p style="color: #000000; font-size: 16px; font-weight: 300">
                                <?php echo __(get_the_content()); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
<?php
    wp_reset_postdata();
}
?>