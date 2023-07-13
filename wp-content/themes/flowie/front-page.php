<?php /* Template Name: Home */?>

<?php get_header(); ?>

		<!-- SECTION / ABOUT US -->
		<section id="about-us">
			<div class="container-fluid no-padding">
				<div class="row no-gutters">
					
					<!-- COL / LEFT -->
					<div class="col-lg-6 left">
						
						<p class="special-title-bigger vertical-text wow fadeIn">
							About us
						</p>

						<!-- CONTENT -->
						<div class="content">

							<h2 class="title-big wow fadeInUp">
								<?php the_field('home_title_about_us'); ?>
							</h2>

							<p class="text-medium wow fadeInUp">
								<?php the_field('home_text_about_us'); ?>
							</p>

							<a href="<?=get_site_url()?>/about-us" class="green-button wow zoomIn">
								<?php the_field('home_button_about_us'); ?>
							</a>

						</div><!-- END CONTENT -->

					</div><!-- END COL / LEFT -->

					<!-- COL / RIGHT -->
					<div class="col-lg-6 right wow fadeInUp">

						<img src="<?php the_field('home_image_about_us'); ?>" alt="<?php the_field('home_image_caption_about_us'); ?>">
						
						<p class="text-small">
							<?php the_field('home_image_caption_about_us'); ?>
						</p>

					</div><!-- END COL / RIGHT -->

				</div><!-- END ROW -->
			</div><!-- END CONTAINER FLUID -->

			<!-- CONTAINER -->
			<div class="container container-big wow fadeInUp">
				<div class="row">
					<div class="col-12">
						
						<!-- TEXT BLOCK -->
						<div class="text-block">
							
							<h2 class="title-small">
								<?php the_field('home_title_line_01'); ?>
							</h2>

							<h2 class="title-medium">
								<?php the_field('home_title_line_02'); ?>
							</h2>

						</div><!-- END TEXT BLOCK -->

						<img src="<?=get_template_directory_uri()?>/assets/img/wings-right.png" alt="Wings">

					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->

		</section><!-- END SECTION / ABOUT US -->

		<!-- SECTION / FLOWIE IS -->
		<section id="flowie-is">
			<div class="container container-big">
				<div class="row">

					<!-- COL / RIGHT -->
					<div class="col-lg-7 col-md-push-5 right">
						
						<!-- CIRCLE COL -->
						<div class="circle-col">
							
							<!-- BIG CIRCLE -->
							<div class="big-circle">
								
								<div class="points"></div>
								
								<span class="circle-01 wow zoomIn" data-wow-delay=".0s">
									<p class="title-smaller">
										<?php the_field('home_golden_circle_title_01'); ?>
									</p>
								</span>

								<span class="circle-02 wow zoomIn" data-wow-delay=".3s">
									<p class="text-biggest">
										<?php the_field('home_golden_circle_title_02'); ?>
									</p>
								</span>

								<span class="circle-03 wow zoomIn" data-wow-delay=".6s">
									<p class="text-bigger">
										<?php the_field('home_golden_circle_title_03'); ?>
									</p>
								</span>

							</div><!-- END BIG CIRCLE -->
							
							<p class="text-smaller wow fadeInUp">
								<?php the_field('home_golden_circle_legend'); ?>
							</p>

						</div><!-- END CIRCLE COL -->

						<p class="special-title-big vertical-text wow fadeIn">
							Flowie is
						</p>

					</div><!-- END COL / RIGHT -->

					<!-- COL / LEFT -->
					<div class="col-lg-5 col-md-pull-7 left">
						
						<!-- BLOCK -->
						<div class="block wow fadeInUp">

							<h2 class="text-big">
								<?php the_field('home_golden_circle_title_01'); ?>
							</h2>

							<p class="text-small">
								<?php the_field('home_golden_circle_text_01'); ?>
							</p>

							<a href="<?=get_site_url()?>/about-us" class="text-small hvr-underline-from-left">
								<?php the_field('home_golden_circle_link_01'); ?>
							</a>

						</div><!-- END BLOCK -->

						<!-- BLOCK -->
						<div class="block wow fadeInUp">
							
							<h2 class="text-big">
								<?php the_field('home_golden_circle_title_02'); ?>
							</h2>

							<p class="text-small">
								<?php the_field('home_golden_circle_text_02'); ?>
							</p>

						</div><!-- END BLOCK -->

						<!-- BLOCK -->
						<div class="block wow fadeInUp">
							
							<h2 class="text-big">
								<?php the_field('home_golden_circle_title_03'); ?>
							</h2>

							<p class="text-small">
								<?php the_field('home_golden_circle_text_03'); ?>
							</p>

						</div><!-- END BLOCK -->
					</div><!-- END COL / LEFT -->

				</div><!-- END ROW -->
			</div><!-- END CONTAINER / BIG -->
		</section><!-- END SECTION / FLOWIE IS -->

		<!-- SECTION / WE LOVE -->
		<section id="we-love">

			<!-- BLOCKS -->
			<div class="white-block-top"></div>
			<div class="white-block-bottom"></div>

			<!-- CNTAINER BIG -->
			<div class="container container-big">
				<div class="row">
					
					<!-- COL / LEFT -->
					<div class="col-lg-6 left">

						<h2 class="special-title-bigger wow fadeInUp">
							<?php the_field('home_we_love_title'); ?>
						</h2>

						<p class="text-biggest wow fadeInUp">
							<?php the_field('home_we_love_text'); ?>
						</p>

						<a href="<?=get_site_url()?>/experiences" class="green-button wow fadeInUp">
							<?php the_field('home_we_love_button'); ?>
						</a>

					</div><!-- END COL / LEFT -->

					<!-- COL / RIGHT -->
					<div class="col-lg-6 right wow fadeInUp">

						<img src="<?php the_field('home_we_love_image'); ?>" alt="<?php the_field('home_we_love_image_caption'); ?>">

						<p class="text-small">
							<?php the_field('home_we_love_image_caption'); ?>
						</p>

					</div><!-- END COL / RIGHT -->

				</div><!-- END ROW -->
			</div><!-- END CONTAINER / BIG -->
		</section><!-- END SECTION / WE LOVE -->

		<!-- SECTION / NEXT IMMERSION -->
		<section id="next-immersion">
			<div class="container container-big">

				<?php
					$experience = new WP_Query(
						[
							'post_type'			=> 'experience',
							'order'				=> 'DSC',
							'orderby'			=> 'date',
							'posts_per_page'	=> '1',
						]
					);
				?>

				<?php if ($experience->have_posts()) : ?>
					<?php $a= 1; while ($experience->have_posts()) : $experience->the_post(); ?>
						
						<?php if( get_field('experience_coming_soon') ): ?>
							
							<!-- DO NOTHING -->

						<?php else: ?>

							<!-- ROW -->
							<div class="row">
								
								<!-- COL / LEFT -->
								<div class="col-lg-6 left">
									<div class="title-block">
										
										<img src="<?=get_template_directory_uri()?>/assets/img/wings-left.png" alt="Wings" class="wow fadeInUp">
										
										<h2 class="title-small wow fadeInUp">
											<span class="bolder">Next Immersion</span> <br />
											Experience
										</h2>

									</div><!-- END TITLE BLOCK -->

									<h2 class="special-title-big wow fadeInUp">
										<?php the_title(); ?>
									</h2>

									<p class="text-bigger wow fadeInUp">
										<?php the_field('experience_date'); ?>
									</p>

									<div class="green-line wow zoomIn"></div>

									<div class="cf"></div>

									<p class="text-medium wow fadeInUp">
										<?php the_field('experience_short_description'); ?>
									</p>

									<?php if( get_field('experience_button') ): ?>

										<a href="<?php the_field('experience_button_link'); ?>" target="_blank" class="green-button wow fadeInUp">
											<?php the_field('experience_button_text'); ?>
										</a>

									<?php else: ?>

										<a href="<?php the_permalink(); ?>" class="green-button wow fadeInUp">
											Subscribe to Experience
										</a>

									<?php endif; ?>

								</div><!-- END COL / LEFT -->
								
								<!-- COL / RIGHT -->
								<div class="col-lg-6 right wow fadeInUp">

									<div class="experience-img" style="background-image: url(<?php the_field('experience_featured_image'); ?>)"></div>

								</div><!-- END COL / RIGHT -->

							</div><!-- END ROW -->

						<?php endif; ?>
					<?php $a++; endwhile;  ?>
				<?php endif; ?>
			</div><!-- END CONTAINER / BIG -->
		</section><!-- END SECTION / NEXT IMMERSION -->

<?php get_footer();?>