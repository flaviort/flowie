<?php get_header(); ?>

		<!-- SECTION / MAIN CONTENT -->
		<section id="main-content">
			
			<!-- TITLE ROW -->
			<div id="title-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">

							<h1 class="special-title-ultra wow fadeInLeft">
								404
							</h1>

							<img src="<?=get_template_directory_uri()?>/assets/img/wings-right.png" alt="" class="wings wow zoomIn" data-wow-delay=".5s">

							<p class="text-medium wow fadeInLeft">
								<strong>Houston, we have a problem!</strong> <br />
								The page you are looking for is not available.
							</p>

							<a href="<?=get_site_url()?>" class="green-button">
								Back to home
							</a>

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END TITLE ROW -->

		</section><!-- END SECTION / MAIN CONTENT -->

<?php get_footer();?>