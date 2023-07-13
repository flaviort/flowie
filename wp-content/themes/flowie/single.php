<?php get_header(); ?>

<?php
	while (have_posts()) : the_post();
?>

		<!-- SECTION / MAIN CONTENT -->
		<section id="main-content">
			
			<!-- THUMB ROW -->
			<div id="thumb-row">
				<div class="container-fluid no-padding">
					<div class="row no-gutters">
						<div class="col-12">
							<div class="big-thumb" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></div>
						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END THUMB ROW -->

			<!-- CONTENT ROW -->
			<div id="content-row">
				<div class="container">
					<div class="row wow fadeInUp">
						<div class="col-12">
							<div class="box">

								<h1 class="title text-bigger">
									<?php the_title(); ?>
								</h1>

								<p class="date text-smaller">
									<?php echo get_the_date(); ?>
								</p>

								<!-- CONTENT -->
								<div class="content">

									<?php the_content(); ?>

								</div><!-- END CONTENT -->

								<a href="<?=get_site_url()?>/blogie" class="green-button">
									Back to all posts
								</a>

							</div><!-- END BOX -->
						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER -->
			</div><!-- END CONTENT ROW -->

		</section><!-- END SECTION / MAIN CONTENT -->

<?php endwhile; ?>

<?php get_footer();?>