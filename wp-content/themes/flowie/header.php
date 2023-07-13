<!DOCTYPE html>
<html lang="en_US">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">
		<link rel="shortcut icon" href="<?=get_template_directory_uri()?>/favicon.png">
		
		<meta name="author" content="Amanda Miiller | Flávio R. Troszcanczuk">

		<title><?php bloginfo( 'name' ); ?></title>

		<!-- GOOGLE -->
		<meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
		<link rel="canonical" href="https://www.flowie.org/" />
		
		<!-- FACEBOOK -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
		<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
		<meta property="og:url" content="<?=get_site_url()?>" />
		<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
		<meta property="og:image" content="<?=get_site_url()?>/wp-content/themes/flowie/assets/img/og-image.jpg" />
		<meta property="og:image:secure_url" content="<?=get_site_url()?>/wp-content/themes/flowie/assets/img/og-image.jpg" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />

		<!-- CSS -->
		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/framework.min.css">
		<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/main.css">

		<?php wp_head(); ?>
	
	</head>

	<!-- BODY -->
	<body <?php body_class();?>>

		<!-- FSMENU -->
		<section id="fsmenu">

			<!-- FS BG -->
			<div class="fs-bg"></div>
			
			<!-- CLOSE BT -->
			<div class="close-bt">
				<img src="<?=get_template_directory_uri()?>/assets/img/icon-close.svg" alt="Close" class="svg">
			</div><!-- END CLOSE BT -->

			<?php
				wp_nav_menu( array(
					'theme_location' => 'fs_menu',
					'menu_name' => 'FS Menu',
				));
			?>

		</section><!-- END SECTION / FSMENU -->

		<!-- TOP SECTION -->

		<!-- HOMEPAGE -->
		<?php if ( is_front_page() ) : ?> 
			<section id="top-section" class="homepage" style="background-image: url(<?php the_field('home_video_poster'); ?>)">

				<!-- VIDEO BG -->
				<div id="the-video" class="video-bg">
					<video class="video-js" data-setup="{}" poster="<?php the_field('home_video_poster'); ?>" data-autoplay preload autoplay loop muted playsinline>
						<source src="<?php the_field('home_video'); ?>" type="video/mp4" />
					</video>
				</div><!-- END VIDEO BG -->

				<!-- WHITE BOTTOM -->
				<div class="white-bottom"></div>
				
				<!-- TOP MENU -->
				<div class="top-menu">
					<div class="container container-bigger">
						<div class="row">
							<div class="col-12">
						
								<!-- LEFT -->
								<div class="left">
									<a href="<?=get_site_url()?>" class="logo-top wow fadeIn"><img src="<?=get_template_directory_uri()?>/assets/img/logo-flowie-small.png" alt="Flowie | Impact Experiences" class="hvr-bob"></a>
								</div><!-- END LEFT -->
						
								<!-- MIDDLE -->
								<div class="middle wow slideInDown" data-wow-delay=".2s">
									<nav class="top-nav">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'top_menu',
												'menu_name' => 'Top Menu'
											));
										?>
									</nav><!-- END NAV / TOP NAV -->
								</div><!-- END MIDDLE -->

								<!-- RIGHT -->
								<div class="right">
									<nav class="social">
										<ul>
											
											<li class="wow zoomIn" data-wow-delay=".3s">
												<a href="https://www.facebook.com/<?php echo $data[0]['flowie_facebook'];?>">
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-facebook.svg" alt="Facebook" class="svg">
												</a>
											</li>

											<li class="wow zoomIn" data-wow-delay=".4s">
												<a href="https://www.instagram.com/<?php echo $data[0]['flowie_instagram'];?>">
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-instagram.svg" alt="Instagram" class="svg">
												</a>
											</li>

											<li class="wow zoomIn" data-wow-delay=".5s">
												<a href="https://twitter.com/<?php echo $data[0]['flowie_twitter'];?>">
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-twitter.svg" alt="Twitter" class="svg">
												</a>
											</li>

											<li class="bt-menu">
												<span>
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-menu.svg" alt="Menu" class="svg">
												</span>
											</li>

										</ul>
									</nav>
								</div><!-- END RIGHT -->

							</div><!-- END COL -->
						</div><!-- END ROW -->
					</div><!-- END CONTAINER -->
				</div><!-- END TOP MENU -->

				<!-- BANNER HOME -->
				<div class="banner-home">
					<div class="container container-bigger">
						<div class="row">
							<div class="col-12">

								<h2 class="vertical-text special-title-smaller wow fadeIn" data-wow-delay=".5s">
									<?php the_field('home_video_side_text'); ?>
								</h2>

								<img src="<?=get_template_directory_uri()?>/assets/img/logo-flowie-big.png" alt="Flowie | Impact Experiences" class="big-logo wow zoomIn" data-wow-delay=".6s">

								<a href="#about-us" class="text-medium hvr-underline-from-left wow fadeInDown" data-wow-delay=".7s">
									<?php the_field('home_video_bottom_text'); ?>
								</a>

								<div class="little-line wow fadeInDown" data-wow-delay=".8s"></div>

							</div><!-- END COL -->
						</div><!-- END ROW -->
					</div><!-- END CONTAINER -->
				</div><!-- END BANNER HOME -->

			</section><!-- END SECTION / TOP SECTION -->

		<!-- INTERNAL PAGES -->
		<?php else : ?>
			<section id="top-section" class="internal-page <?php global $top_section_class; echo $top_section_class; ?>">

				<!-- TOP MENU -->
				<div class="top-menu">
					<div class="container container-bigger">
						<div class="row">
							<div class="col-12">
						
								<!-- LEFT -->
								<div class="left">
									<a href="<?=get_site_url()?>" class="logo-top wow fadeIn"><img src="<?=get_template_directory_uri()?>/assets/img/logo-flowie-small.png" alt="Flowie | Impact Experiences" class="hvr-bob"></a>
								</div><!-- END LEFT -->
						
								<!-- MIDDLE -->
								<div class="middle wow slideInDown" data-wow-delay=".2s">
									<nav class="top-nav">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'top-menu'
											));
										?>
									</nav><!-- END NAV / TOP NAV -->
								</div><!-- END MIDDLE -->

								<!-- RIGHT -->
								<div class="right">
									<nav class="social">
										<ul>

											<li class="wow zoomIn" data-wow-delay=".3s">
												<a href="https://www.facebook.com/<?php echo $data[0]['flowie_facebook'];?>">
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-facebook.svg" alt="Facebook" class="svg">
												</a>
											</li>

											<li class="wow zoomIn" data-wow-delay=".4s">
												<a href="https://www.instagram.com/<?php echo $data[0]['flowie_instagram'];?>">
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-instagram.svg" alt="Instagram" class="svg">
												</a>
											</li>

											<li class="wow zoomIn" data-wow-delay=".5s">
												<a href="https://twitter.com/<?php echo $data[0]['flowie_twitter'];?>">
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-twitter.svg" alt="Twitter" class="svg">
												</a>
											</li>

											<li class="bt-menu">
												<span>
													<img src="<?=get_template_directory_uri()?>/assets/img/icon-menu.svg" alt="Menu" class="svg">
												</span>
											</li>

										</ul>
									</nav>
								</div><!-- END RIGHT -->

							</div><!-- END COL -->
						</div><!-- END ROW -->
					</div><!-- END CONTAINER -->
				</div><!-- END TOP MENU -->
			</section><!-- END SECTION / TOP SECTION -->

		<?php endif ?><!-- END INTERNAL PAGES -->