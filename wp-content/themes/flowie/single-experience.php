<?php get_header(); ?>

		<!-- SECTION / MAIN CONTENT -->
		<section id="main-content">
			
			<!-- TITLE ROW -->
			<div id="title-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">
							
							<!-- TITLE BLOCK -->
							<div class="title-block">

								<p class="title-smaller wow fadeInUp">
									Welcome to
								</p>

								<h2 class="special-title-bigger wow fadeInUp">
									<?php the_title(); ?>
								</h2>

								<div class="yellow-line wow zoomIn"></div>

							</div><!-- END TITLE BLOCK -->

							<img src="<?=get_template_directory_uri()?>/assets/img/wings-blue-right.png" alt="" class="wings wow fadeIn">

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END TITLE ROW -->

			<!-- DESCRIPTION ROW -->
			<div id="description-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<!-- BIG IMG -->
							<div class="big-img wow fadeInUp">
								<div class="big-thumb" style="background-image: url(<?php the_field('experience_featured_image'); ?>)"></div>
								<div class="yellow-line"></div>
							</div><!-- END BIG IMG -->

							<p class="text-small location wow fadeInUp">
								<?php the_field('experience_featured_image_caption'); ?>
							</p>

							<!-- FULL DESC -->
							<div class="full-desc">
								
								<p class="text-bigger wow fadeInUp">
									<?php the_field('experience_date'); ?>
								</p>

								<p class="text-medium wow fadeInUp">
									<?php the_field('experience_short_description'); ?><br /><br />

									<strong>Welcome to our immersion in <?php the_title(); ?>!</strong>
								</p>

							</div><!-- END FULL DESC -->
							
						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END DESCRIPTION ROW -->

			<!-- SOCIAL ROW -->
			<div id="social-row">

				<!-- ARROWS -->
				<div class="arrow arrow-left"><img src="<?=get_template_directory_uri()?>/assets/img/icon-arrow-left.svg" alt="" class="svg"></div>
				<div class="arrow arrow-right"><img src="<?=get_template_directory_uri()?>/assets/img/icon-arrow-right.svg" alt="" class="svg"></div>

				<!-- CONTAINER BIG -->
				<div class="container container-big">

					<!-- IMMERSION SLIDER -->
					<?php if (have_rows('experience_slides')) : ?>

						<div class="immersion-slider wow fadeInUp">
							
							<!-- SLICK SLIDE -->
							<?php while (have_rows('experience_slides')) : the_row(); ?>
								<div class="slick-slide">
									<div class="row">
								
										<!-- COL / LEFT -->
										<div class="col-lg-5 left">
											<div class="slide-img" style="background-image: url(<?php the_sub_field('experience_slide_image'); ?>)"></div>
										</div><!-- END COL / LEFT -->

										<!-- COL / RIGHT -->
										<div class="col-lg-7 right">
											<h2 class="special-title-big">
												<?php the_sub_field('experience_slide_title'); ?>
											</h2>

											<p class="text-small">
												<?php the_sub_field('experience_slide_text'); ?>
											</p>
										</div><!-- END COL / RIGHT -->

									</div><!-- END ROW -->
								</div><!-- END SLICK SLIDE -->
							<?php endwhile; ?>

						</div><!-- END IMMERSION SLIDER -->

					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
					
				</div><!-- END CONTAINER BIG -->
			</div><!-- END SOCIAL ROW -->

			<!-- ITINERARY ROW -->
			<div id="itinerary-row" class="wow fadeInUp">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<!-- ITINERARY SLIDER -->
							<?php if (have_rows('experience_places')) : ?>

								<div class="itinerary-slider">
									
									<!-- SLICK SLIDE -->
									<?php while (have_rows('experience_places')) : the_row(); ?>
										<div class="slick-slide">
											
											<div class="places-img" style="background-image: url(<?php the_sub_field('experience_place_image'); ?>)"></div>
							
											<p class="destination text-biggest">
												<?php the_sub_field('experience_place_name'); ?>
											</p>

											<p class="date text-medium">
												<?php the_sub_field('experience_place_dates'); ?>
											</p>

										</div><!-- END SLICK SLIDE -->
									<?php endwhile; ?>

								</div><!-- END ITINERARY SLIDER -->

							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END ITINERARY ROW -->

			<!-- PRICING ROW -->
			<div id="pricing-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">
							
							<!-- TITLE BLOCK -->
							<div class="title-block">
							
								<p class="special-title-medium-big wow fadeInUp">
									Pricing &
								</p>

								<p class="special-title-bigger wow fadeInUp">
									Details
								</p>

								<div class="yellow-block wow zoomIn"></div>

							</div><!-- END TITLE BLOCK -->

							<!-- GRAY BLOCK -->
							<div class="gray-block wow fadeInUp">
								
								<p class="special-title-bigger">
									<?php the_field('experience_price_total'); ?>
								</p>

								<div class="little-line"></div>

								<p class="text-bigger">Payment Conditions</p>

								<p class="text-big prices">
									<?php the_field('experience_payment_conditions'); ?>
								</p>

								<div class="text-medium details">
									If you have any enquires or difficulties regarding the conditions, please <a href="mailto:flowie@flowie.org">contact us.</a><br />
									<a href="<?php the_field('experience_payment_terms_pdf'); ?>" data-fancybox>See all payment terms and conditions.</a>
								</div>

							</div><!-- END GRAY BLOCK -->

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END PRICING ROW -->

			<!-- INCLUDED ROW -->
			<div id="included-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">
							
							<h2 class="special-title-medium wow fadeInUp">
								What's <span class="outline">Included</span>
							</h2>

							<p class="text-medium wow fadeInUp">
								<?php the_field('experience_whats_included'); ?>
							</p>

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END INCLUDED ROW -->

			<!-- FORM ROW -->
			<div id="form-row">
				<div class="container container-big">
					
					<!-- TITLE ROW -->
					<div class="title-row">
						<div class="row">
							<div class="col-12">

								<img src="<?=get_template_directory_uri()?>/assets/img/wings-left.png" alt="Wings" class="wing">
								<h2 class="special-title-ultra">I'm in!</h2>

								<img src="<?php the_field('experience_map'); ?>" alt="Map of destinations" class="side-img">

								<p class="text-medium">
									To register, please click on the button below.
								</p>

								<div class="text-big">
									See you in <?php the_title(); ?>!
								</div>

								<a href="<?php the_field('experience_register_link'); ?>" class="green-button" target="_blank">Register</a>
								
							</div><!-- END COL -->
						</div><!-- END ROW -->
					</div><!-- END TITLE ROW -->

					<!-- REGISTER ROW -->
					<div class="register-row">
						<div class="row wow fadeIn">
							<div class="col-12">
								<div class="line"></div>
							</div><!-- END COL -->
						</div><!-- END ROW -->
					</div><!-- END REGISTER ROW -->

				</div><!-- ED CONTAINER -->
			</div><!-- END FORM ROW -->

		</section><!-- END SECTION / MAIN CONTENT -->

<?php get_footer();?>

<script src="<?=get_template_directory_uri()?>/assets/js/experiences-internal.js"></script>