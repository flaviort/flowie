<?php /* Template Name: Contact */?>

<?php get_header(); ?>

		<!-- SECTION / MAIN CONTENT -->
		<section id="main-content">
			
			<!-- TITLE ROW -->
			<div id="title-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<h1 class="special-title-ultra wow fadeInLeft">
								<?php the_field('contact_title_top'); ?>
							</h1>

							<img src="<?=get_template_directory_uri()?>/assets/img/wings-right.png" alt="" class="wings wow zoomIn" data-wow-delay=".5s">

							<br />

							<h1 class="special-title-ultra wow fadeInLeft" data-wow-delay=".2s">
								<?php the_field('contact_title_bottom'); ?>
							</h1>

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END TITLE ROW -->

			<!-- FORM ROW -->
			<div id="form-row">
				<div class="container container-big">
					
					<!-- ROW -->
					<div class="row wow fadeInUp">
						
						<!-- COL / LEFT -->
						<div class="col-lg-7 left">

							<img src="<?php the_field('contact_featured_image'); ?>" alt="Let's flow">

						</div><!-- END COL / LEFT-->

						<!-- COL / RIGHT -->
						<div class="col-lg-5 right">
							
							<?php echo do_shortcode('[contact-form-7 id="185" title="Contact" html_class="use-floating-validation-tip form-contact wow fadeInUp" html_id="form-contact"]'); ?>

						</div><!-- END COL / RIGHT-->

					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END FORM ROW -->

		</section><!-- END SECTION / MAIN CONTENT -->

<?php get_footer();?>