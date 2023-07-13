<?php /* Template Name: About us */?>

<?php get_header(); ?>

		<!-- SECTION / MAIN CONTENT -->
		<section id="main-content">
			
			<!-- TITLE ROW -->
			<div id="title-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<h1 class="special-title-ultra wow fadeInLeft">
								<?php the_field('about_title_top'); ?>
							</h1>

							<br />

							<h1 class="special-title-ultra wow fadeInLeft" data-wow-delay=".2s">
								<?php the_field('about_title_bottom'); ?>
							</h1>

							<img src="<?=get_template_directory_uri()?>/assets/img/wings-right.png" alt="" class="wings wow zoomIn" data-wow-delay=".5s">

							<!-- ROW -->
							<div class="row wow fadeInUp">
								
								<!-- COL -->
								<div class="col-lg-6 col-xl-5"></div>
								
								<!-- COL -->
								<div class="col-lg-6 col-xl-4">
									
									<p class="text-medium">
										<?php the_field('about_subtitle_top'); ?>
									</p>

									<p class="text-biggest">
										<?php the_field('about_subtitle_bottom'); ?>
									</p>

								</div><!-- END COL -->
							</div><!-- END ROW -->

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END TITLE ROW -->

			<!-- FEATURE ROW -->
			<div id="feature-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<div class="title-block wow fadeInUp">
								<h2 class="special-title-small"><?php the_field('about_content_title_top'); ?></h2>
								<h2 class="special-title-medium"><?php the_field('about_content_title_bottom'); ?></h2>
							</div>

							<p class="text-medium wow fadeInUp">
								<?php the_field('about_content_text'); ?>
							</p>
							
						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END FEATURE ROW -->

			<!-- POSTS ROW -->
			<div id="posts-row">
				<div class="container">

					<?php
						$team = new WP_Query(
							[
								'post_type' => 'team-member',
								'order'     => 'ASC',
								'orderby'   => 'date'
							]
						);
					?>

					<?php if ($team->have_posts()) : ?>
						<?php $a= 1; while ($team->have_posts()) : $team->the_post(); ?>
								
							<?php if (($a % 2) == 1){ ?>

								<!-- ROW -->
								<div class="row wow fadeInUp">

									<!-- COL / LEFT -->
									<div class="col-lg-6 left">

										<span class="big-thumb" style="background-image: url(<?php the_field('about_team_member_photo'); ?>"></span>
										<p class="text-small"><?php the_field('about_team_member_photo_caption'); ?></p>

									</div><!-- END COL / LEFT-->

									<!-- COL / RIGHT -->
									<div class="col-lg-6 right">

										<p class="text-smaller subtitle">
											Meet
										</p>

										<h2 class="special-title-medium title">
											<?php the_title(); ?>
										</h2>

										<p class="text-medium desc">
											<?php the_field('about_team_member_description'); ?>
										</p>
											
									</div><!-- END COL / RIGHT-->

								</div><!-- END ROW -->

							<?php } elseif (($a % 2) == 0) { ?>

								<!-- ROW -->
								<div class="row wow fadeInUp">

									<!-- COL / LEFT -->
									<div class="col-lg-6 col-md-push-6 left">

										<span class="big-thumb" style="background-image: url(<?php the_field('about_team_member_photo'); ?>"></span>
										<p class="text-small"><?php the_field('about_team_member_photo_caption'); ?></p>

									</div><!-- END COL / LEFT-->

									<!-- COL / RIGHT -->
									<div class="col-lg-6 col-md-pull-6 right">

										<p class="text-smaller subtitle">
											Meet
										</p>

										<h2 class="special-title-medium title">
											<?php the_title(); ?>
										</h2>

										<p class="text-medium desc">
											<?php the_field('about_team_member_description'); ?>
										</p>
											
									</div><!-- END COL / RIGHT-->

								</div><!-- END ROW -->

							<?php } ?>

						<?php $a++; endwhile;  ?>
					<?php endif; ?>

				</div><!-- END CONTAINER -->
			</div><!-- END POSTS ROW -->

		</section><!-- END SECTION / MAIN CONTENT -->

<?php get_footer();?>