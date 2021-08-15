<style>
	.welk-accordian {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.welk-accordian img {
		width: 50%;
	}

	.card-header {
		background: none !important;
		border: none !important;
	}
</style>

<?php

$args = array(
	'post_type' => 'welk-eco',
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


	<section class="welk-accordian">
		<div>
			<div id="accordion">
				<?php

				while ($myQuery->have_posts()) {
					$myQuery->the_post();

				?>
					<!-- <div class="card"> -->
					<div class="card-header">
						<h5 class="accordion-heading" data-toggle="collapse" data-target="#<?php echo get_the_ID(); ?>" aria-expanded="true" data-img="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" style="
								font-size: 35px !important;
								color: #36271d !important;
								font-weight: 500;
								cursor: pointer;
							">
							<?php echo __(get_the_title()); ?>
						</h5>
					</div>

					<div id="<?php echo get_the_ID(); ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body" style="
								font-size: 16px !important;
								color: #6a6a6a;
								font-weight: 300;
							">
							<?php echo __(get_the_content()); ?>
						</div>
					</div>
					<!-- </div> -->
				<?php
				}
				?>
			</div>
		</div>
		<img class="accordion-img" src="<?php echo get_template_directory_uri(); ?>/images/ilustracion de base.png" alt="welk ecosistema deportivo 4.0" />
	</section>

<?php
	wp_reset_postdata();
}
?>