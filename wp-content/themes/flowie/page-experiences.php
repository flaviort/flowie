<?php /* Template Name: Experiences */?>



<?php get_header(); ?>



		<!-- SECTION / MAIN CONTENT -->

		<section id="main-content">

			

			<!-- TITLE ROW -->

			<div id="title-row">

				<div class="container container-big">

					<div class="row">

						<div class="col-12">



							<h1 class="special-title-ultra wow fadeInLeft">

								<?php the_field('experiences_title_top'); ?>

							</h1>



							<img src="<?=get_template_directory_uri()?>/assets/img/wings-right.png" alt="" class="wings wow zoomIn" data-wow-delay=".5s">



							<h1 class="special-title-ultra wow fadeInLeft" data-wow-delay=".2s">

								<?php the_field('experiences_title_bottom'); ?>

							</h1>



							<div class="block"></div>



							<p class="text-medium wow fadeInLeft">

								<?php the_field('experiences_text'); ?>

							</p>



							<div class="line wow fadeInLeft" data-wow-delay=".2s"></div>



						</div><!-- END COL -->

					</div><!-- END ROW -->

				</div><!-- END CONTAINER BIG -->

			</div><!-- END TITLE ROW -->



			<!-- POSTS ROW -->

			<div id="posts-row">

				<div class="container container-big">



					<?php

						$experience = new WP_Query(

							[

								'post_type' => 'experience',

								'order'     => 'DSC',

								'orderby'   => 'date'

							]

						);

					?>



					<?php if ($experience->have_posts()) : ?>

						<?php $a= 1; while ($experience->have_posts()) : $experience->the_post(); ?>

								

							<?php if (($a % 2) == 1){ ?>

					

								<!-- ROW -->

								<?php if( get_field('experience_coming_soon') ): ?>

									<div class="row coming-soon wow fadeInUp">

								<?php else: ?>

									<div class="row wow fadeInUp">

								<?php endif; ?>

									

									<!-- COL / LEFT -->

									<div class="col-lg-7 left">



										<?php if( get_field('experience_coming_soon') ): ?>

											<span class="big-thumb" style="background-image: url(<?php the_field('experience_featured_image'); ?>)"></span>

										<?php else: ?>

											<a href="<?php the_permalink(); ?>" class="big-thumb" style="background-image: url(<?php the_field('experience_featured_image'); ?>)"></a>

										<?php endif; ?>



									</div><!-- END COL / LEFT-->



									<!-- COL / RIGHT -->

									<div class="col-lg-5 right">



										<h2 class="title-big title">

											<?php the_title(); ?>

										</h2>



										<?php if( get_field('experience_coming_soon') ): ?>

											<p class="text-smaller date">

												Coming soon

											</p>

										<?php else: ?>

											<p class="text-smaller date">

												<?php the_field('experience_date'); ?>

											</p>

										<?php endif; ?>



										<?php if( get_field('experience_coming_soon') ): ?>

											<p class="text-medium desc">

												Experience under construction!

											</p>

										<?php else: ?>

											<p class="text-medium desc">

												<?php the_field('experience_short_description'); ?>

											</p>

										<?php endif; ?>



										<?php if( get_field('experience_coming_soon') ): ?>

											<span class="gray-button">

												Not available

											</span>

										<?php else: ?>

											<a href="<?php the_permalink(); ?>" class="green-button">

												Flow with us

											</a>

										<?php endif; ?>

										

									</div><!-- END COL / RIGHT-->



								</div><!-- END ROW -->



							<?php } elseif (($a % 2) == 0) { ?>



								<!-- ROW -->

								<?php if( get_field('experience_coming_soon') ): ?>

									<div class="row coming-soon wow fadeInUp">

								<?php else: ?>

									<div class="row wow fadeInUp">

								<?php endif; ?>

									

									<!-- COL / LEFT -->

									<div class="col-lg-7 col-md-push-5 left">



										<?php if( get_field('experience_coming_soon') ): ?>

											<span class="big-thumb" style="background-image: url(<?php the_field('experience_featured_image'); ?>)"></span>

										<?php else: ?>

											<a href="<?php the_permalink(); ?>" class="big-thumb" style="background-image: url(<?php the_field('experience_featured_image'); ?>)"></a>

										<?php endif; ?>



									</div><!-- END COL / LEFT-->



									<!-- COL / RIGHT -->

									<div class="col-lg-5 col-md-pull-7 right">



										<h2 class="title-big title">

											<?php the_title(); ?>

										</h2>



										<?php if( get_field('experience_coming_soon') ): ?>

											<p class="text-smaller date">

												Coming soon

											</p>

										<?php else: ?>

											<p class="text-smaller date">

												<?php the_field('experience_date'); ?>

											</p>

										<?php endif; ?>



										<?php if( get_field('experience_coming_soon') ): ?>

											<p class="text-medium desc">

												Experience under construction!

											</p>

										<?php else: ?>

											<p class="text-medium desc">

												<?php the_field('experience_short_description'); ?>

											</p>

										<?php endif; ?>



										<?php if( get_field('experience_coming_soon') ): ?>

											<span class="gray-button">

												Not available

											</span>

										<?php else: ?>

											<a href="<?php the_permalink(); ?>" class="green-button">

												Flow with us

											</a>

										<?php endif; ?>

										

									</div><!-- END COL / RIGHT-->



								</div><!-- END ROW -->



							<?php } ?>



						<?php $a++; endwhile;  ?>

					<?php endif; ?>



				</div><!-- END CONTAINER BIG -->

			</div><!-- END POSTS ROW -->



		</section><!-- END SECTION / MAIN CONTENT -->



<?php get_footer();?>