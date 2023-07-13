<?php /* Template Name: Blogie */?>

<?php get_header(); ?>

		<!-- SECTION / MAIN CONTENT -->
		<section id="main-content">
			
			<!-- TITLE ROW -->
			<div id="title-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<h1 class="special-title-ultra wow fadeInLeft">
								<?php the_field('blogie_top_title'); ?>
							</h1>

							<img src="<?=get_template_directory_uri()?>/assets/img/wings-right.png" alt="" class="wings wow zoomIn" data-wow-delay=".5s">

							<div class="block"></div>

							<p class="text-medium wow fadeInLeft">
								<?php the_field('blogie_top_text'); ?>
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
						$posts = new WP_Query(
							[
								'post_type' => 'post',
								'order'     => 'DESC',
								'orderby'   => 'date'
							]
						);
					?>

					<?php if ($posts->have_posts()) : ?>
						<?php $a= 1; while ($posts->have_posts()) : $posts->the_post(); ?>
								
							<?php if (($a % 2) == 1){ ?>
					
								<!-- ROW -->
								<div class="row wow fadeInUp">
									
									<!-- COL / LEFT -->
									<div class="col-lg-6 left">

										<a href="<?php the_permalink(); ?>" class="big-thumb" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></a>

									</div><!-- END COL / LEFT-->

									<!-- COL / RIGHT -->
									<div class="col-lg-6 right">

										<p class="text-smaller date">
											<?php echo get_the_date(); ?>
										</p>

										<h2 class="text-bigger title">
											<?php the_title(); ?>
										</h2>

										<p class="text-medium desc">
											<?php the_excerpt(); ?>...
										</p>

										<a href="<?php the_permalink(); ?>" class="green-button">
											Read more
										</a>
										
									</div><!-- END COL / RIGHT-->

								</div><!-- END ROW -->

							<?php } elseif (($a % 2) == 0) { ?>

								<!-- ROW -->
								<div class="row wow fadeInUp">
									
									<!-- COL / LEFT -->
									<div class="col-lg-6 col-md-push-6 left">

										<a href="<?php the_permalink(); ?>" class="big-thumb" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></a>

									</div><!-- END COL / LEFT-->

									<!-- COL / RIGHT -->
									<div class="col-lg-6 col-md-pull-6 right">

										<p class="text-smaller date">
											<?php echo get_the_date(); ?>
										</p>

										<h2 class="text-bigger title">
											<?php the_title(); ?>
										</h2>

										<p class="text-medium desc">
											<?php the_excerpt(); ?>...
										</p>

										<a href="<?php the_permalink(); ?>" class="green-button">
											Read more
										</a>
										
									</div><!-- END COL / RIGHT-->

								</div><!-- END ROW -->

							<?php } ?>

						<?php $a++; endwhile;  ?>
					<?php endif; ?>

				</div><!-- END CONTAINER BIG -->
			</div><!-- END POSTS ROW -->

		</section><!-- END SECTION / MAIN CONTENT -->

<?php get_footer();?>