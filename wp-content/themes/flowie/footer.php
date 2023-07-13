<?php 
	$data = get_option( 'contact-infos' );
?>

<?php wp_footer(); ?>

		<!-- SECTION / BOTTOM -->
		<section id="bottom-section">

			<!-- SUBSCRIBE ROW -->
			<div class="subscribe-row">
				<div class="container container-big">
					<div class="row">
						<div class="col-12">
							
							<p class="text-medium news-title wow fadeInUp">
								Subscribe to our Newsletter
							</p>

							<!-- FORM NEWSLETTER -->
							<?php echo do_shortcode('[contact-form-7 id="63" title="Newsletter" html_class="use-floating-validation-tip form-newsletter wow fadeInUp"]'); ?>

						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER BIG -->
			</div><!-- END SUBSCRIBE ROW -->

			<!-- CNTACT INFOS -->
			<div class="contact-infos">
				<div class="container-fluid no-padding">
					<div class="row no-gutters">
						
						<!-- COL / LEFT -->
						<div class="col-lg-6 left">
							
							<!-- SPECIAL TITLE BIG -->
							<h2 class="special-title-big">
								Keep in <br />
								<span class="outline">Touch</span>
								<span class="line"></span>
							</h2><!-- END SPECIAL TITLE BIG -->

							<!-- NAV / SOCIAL -->
							<nav class="social">
								<ul>

									<li>
										<a href="https://www.facebook.com/<?php echo $data[0]['flowie_facebook'];?>" target="_blank">
											<span class="circle">
												<img src="<?=get_template_directory_uri()?>/assets/img/icon-facebook.svg" alt="Facebook" class="svg">
											</span>
											<p class="text-big">@<?php echo $data[0]['flowie_facebook'];?></p>
										</a>
									</li><!-- END LI -->

									<li>
										<a href="https://www.instagram.com/<?php echo $data[0]['flowie_instagram'];?>" target="_blank">
											<span class="circle">
												<img src="<?=get_template_directory_uri()?>/assets/img/icon-instagram.svg" alt="Instagram" class="svg">
											</span>
											<p class="text-big">@<?php echo $data[0]['flowie_instagram'];?></p>
										</a>
									</li><!-- END LI -->

									<li>
										<a href="https://twitter.com/<?php echo $data[0]['flowie_twitter'];?>" target="_blank">
											<span class="circle">
												<img src="<?=get_template_directory_uri()?>/assets/img/icon-twitter.svg" alt="Twitter" class="svg">
											</span>
											<p class="text-big">@<?php echo $data[0]['flowie_twitter'];?></p>
										</a>
									</li><!-- END LI -->

									<li>
										<a href="mailto:<?php echo $data[0]['flowie_email'];?>" target="_blank">
											<span class="circle">
												<img src="<?=get_template_directory_uri()?>/assets/img/icon-email.svg" alt="Email" class="svg">
											</span>
											<p class="text-big"><?php echo $data[0]['flowie_email'];?></p>
										</a>
									</li><!-- END LI -->

								</ul><!-- END UL -->
							</nav><!-- END NAV / SOCIAL -->

							<!-- TEXT BLOCKS -->
							<div class="text-blocks">
								<div class="row">
									
									<!-- COL -->
									<div class="col-sm-6">
										
										<div class="line">
											<span class="icon-phone"></span>
											<p class="text-smaller">Phone: <?php echo $data[0]['flowie_phone_1'];?></p>
										</div>

										<div class="line">
											<span class="icon-mail"></span>
											<a href="mailto:<?php echo $data[0]['flowie_flavia_email'];?>" class="text-smaller"><?php echo $data[0]['flowie_flavia_email'];?></a>
										</div>

									</div><!-- END COL -->

									<!-- COL -->
									<div class="col-sm-6">

										<div class="line">
											<span class="icon-phone"></span>
											<p class="text-smaller">Phone: <?php echo $data[0]['flowie_phone_2'];?></p>
										</div>

										<div class="line">
											<span class="icon-mail"></span>
											<a href="mailto:<?php echo $data[0]['flowie_paulo_email'];?>" class="text-smaller"><?php echo $data[0]['flowie_paulo_email'];?></a>
										</div>
										
									</div><!-- END COL -->

								</div><!-- END ROW -->
							</div><!-- END TEXT BLOCKS -->
						</div><!-- END COL / LEFT-->

						<!-- COL / RIGHT -->
						<div class="col-lg-6 right">
							<div class="instagram-slider">
								<div class="slick-slide"><a href="https://www.instagram.com/flow.ie" target="_blank" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/instagram-thumb-01.jpg)"></a></div>
								<div class="slick-slide"><a href="https://www.instagram.com/flow.ie" target="_blank" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/instagram-thumb-02.jpg)"></a></div>
								<div class="slick-slide"><a href="https://www.instagram.com/flow.ie" target="_blank" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/instagram-thumb-03.jpg)"></a></div>
								<div class="slick-slide"><a href="https://www.instagram.com/flow.ie" target="_blank" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/instagram-thumb-04.jpg)"></a></div>
								<div class="slick-slide"><a href="https://www.instagram.com/flow.ie" target="_blank" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/instagram-thumb-05.jpg)"></a></div>
								<div class="slick-slide"><a href="https://www.instagram.com/flow.ie" target="_blank" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/instagram-thumb-06.jpg)"></a></div>
							</div><!-- END INSTAGRAM SLIDER -->
						</div><!-- END COL / RIGHT-->

						<!-- COL / LAST -->
						<div class="col-12 last">
							<img src="<?=get_template_directory_uri()?>/assets/img/flowie-icon.png" alt="Flowie" class="bottom-icon">
						</div><!-- END COL / LAST -->

					</div><!-- END ROW -->
				</div><!-- END CONTAINER FLUID -->
			</div><!-- END CONTACT INFOS -->

			<!-- BOTTOM ROW -->
			<div class="bottom-row">
				<div class="container container-big">
					<div class="row">
						
						<!-- COL / LEFT -->
						<div class="col-lg-6 left">
							<p class="text-smallest">
								<?php echo $data[0]['flowie_complete_address'];?>
							</p>
						</div><!-- END COL / LEFT -->

						<!-- COL / RIGHT -->
						<div class="col-lg-6 right">
							<p class="text-smallest"><?php echo $data[0]['flowie_copyright'];?></p>
						</div><!-- END COL / RIGHT-->

					</div><!-- END ROW -->
				</div><!-- END CONTAINER -->
			</div><!-- END BOTTOM ROW -->

			<div class="mostrar"></div>

		</section><!-- END SECTION / BOTTOM  SECTION -->

		<!-- FOOTER-->
		<footer>
			<script src="<?=get_template_directory_uri()?>/assets/js/framework.js"></script>		
			<script src="<?=get_template_directory_uri()?>/assets/js/functions.js"></script>
		 </footer>

	</body><!-- END BODY -->
</html><!-- END HTML -->