<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TSE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Wrapper
			================================================ -->
			<div id="wrapper">


				<!-- Fullscreen Hero
				============================================== -->
				<div id="hero" class="fullscreen-hero">
					<div class="hero-bg">
						<div class="hero-container">
							<div class="hero-content">
								<h1 class="display-1"><strong>tse</strong></h1>
								<p class="lead">Transit Systems Engineering, inc.</p>
							</div> <!-- /.hero-content -->
						</div> <!-- /.hero-container -->
					</div> <!-- /.hero-bg -->
				</div> <!-- /#hero .fullscreen-hero -->

				<!-- Featurette Section #1
				============================================== -->
				<section id="first-hero-feature" class="hero">
					<div class="hero-bg first-highlight">
						<div class="hero-container">
							<div class="hero-content">
								<h1 class="display-2">[descriptive highlight]</h1>
							</div>
						</div>
					</div>
				</section> <!-- /#hero -->

				<div id="body-breakpoint"></div>

				<!-- Highlight Carousel
				============================================== -->
				<section id="hoverCarousel">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12 col-md-3">
								<div class="row">
									<div class="col-4 col-sm-4 col-md-12">
										<div id="tab-1" class="tab">
											<h1 class="display-4">Power</h1>
										</div>
									</div>

									<div class="col-4 col-sm-4 col-md-12">
										<div id="tab-2" class="tab">
											<h1 class="display-4">Controls</h1>
										</div>
									</div>

									<div class="col-4 col-sm-4 col-md-12">
										<div id="tab-3" class="tab">
											<h1 class="display-4">Communications</h1>
										</div>
									</div>
								</div> <!-- /.row (nested 1) -->

							</div>

							<div class="col-sm-12 col-md-9">
								<div class="widescreen-wrapper">
									<div id="widescreen" class="widescreen">
										<h1 class="display-4">hover over categories to change this slideshow</h1>
									</div>
								</div>
							</div>

					</div> <!-- /.row (outer) -->
				</section> <!-- #hoverCarousel -->

				<!-- What We Do Section
				============================================== -->
				<section id="overview">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<br>
								<h1 class="display-4">Systems Engineering</h1>
								<br>
							</div>
							<div class="col-12 col-sm-12 col-md-4">
								<div class="info">
									<div class="info-box-title">
										<div class="info-title info-title-primary">
											<h1>Design</h1>
										</div>
									</div> <!-- .info-box-title -->

									<div class="info-box-content">
										<p>Lorem ipsum dolor sit amet, vim ei error iusto dicit, in ius decore ornatus consectetuer. Pri maiorum sadipscing an. Ne per persius prodesset, ius id dicta noster voluptatibus.</p>
									</div> <!-- /.info-box-content -->
								</div>
							</div>

							<div class="col-12 col-sm-6 col-md-4">
								<div class="info">
									<div class="info-box-title">
										<div class="info-title info-title-secondary">
											<h1>Integration</h1>
										</div>
									</div> <!-- .info-box-title -->
									<div class="info-box-content">
										<p>An aeque meliore mandamus his, quem case scaevola nam ei. Posse minimum nec in. Eos duis vivendum gubergren id, est no tale euismod, et noluisse volutpat vel.</p>
									</div> <!-- .info-box-content -->
								</div>
							</div>

							<div class="col-12 col-sm-6 col-md-4">
								<div class="info">
									<div class="info-box-title">
										<div class="info-title info-title-tertiary">
											<h1>Support</h1>
										</div>
									</div> <!-- .info-box-title -->
									<div class="info-box-content">
										<p>Cu summo theophrastus mea, ne error eripuit probatus sea. Atqui oportere accusamus ex ius. Id mea eirmod fabulas scriptorem, eu tollit mentitum rationibus vix.</p>
									</div> <!-- .info-box-content -->
								</div>
						</div>

						<div class="col-12">
							<div class="section-footer">
								<div class="section-footer-content">
									<button type="button" class="btn btn-dark" name="button">See what we do</button>
								</div> <!-- /.info-box-footer-> -->
							</div>
						</div>
					</div>

					<div class="separator separator-transparent"></div>
				</section> <!-- #second-section -->

				<!-- Featurette Section #2
				============================================== -->
				<section class="hero">
					<div class="hero-bg second-highlight">
						<div class="hero-container">
							<div class="hero-content">
								<h1 class="display-2">tse Nucleus</h1>
								<p class="lead">[cool description]</p>
								<br><br>
								<button type="button" class="btn btn-dark" name="button">Learn More</button>
							</div>
						</div>
					</div>
				</section> <!-- /#hero -->

				<!-- Project Highlights Section
				============================================== -->
				<section id="detail-section-title">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<br>
								<h1 class="display-4">Our Solutions</h1>
								<br>
							</div>
						</div>
					</div>
				</section>

				<section id="detail-section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-5">
								<div class="graphic component-fade">
									<div class="nested-detail-title">
										<h1>BART</h1>
										<h4>Warm Springs Extension</h4>
										<h4><small class="text-muted">San Francisco Bay Area</small></h4>
									</div>
									<div class="graphic-box-title graphic-cyan">
										<h1>a</h1>
									</div> <!-- .info-box-title -->

									<div class="graphic-box-content">
										<p class="lead">something cool</p>
									</div> <!-- /.info-box-content -->

									<div class="nested-detail-content">
										<p>Eam stet velit honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
									</div>

									<div class="nested-detail-footer">
										<button type="button" class="btn btn-dark" name="button">Learn More</button>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7">
								<div class="detail detail-right">
									<div class="detail-box-title">
										<h1>BART</h1>
										<h4>Warm Springs Extension</h4>
										<h4><small class="text-muted">San Francisco Bay Area</small></h4>
									</div> <!-- .info-box-title -->
									<div class="detail-box-content">
										<p>Eam stet velit honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
									</div> <!-- .info-box-content -->

									<div class="detail-box-footer">
										<button type="button" class="btn btn-dark" name="button">Learn More</button>
									</div> <!-- /.info-box-footer-> -->
								</div>
							</div>
						</div>
					</div>
				</section> <!-- #detail-section -->

				<section id="detail-section" class="projects-section">
					<div class="container">
						<div class="row">
							<div class="col-12 order-2 col-md-7 order-md-1">
								<div class="detail detail-left">
									<div class="detail-box-title">
										<h1>SFMTA</h1>
										<h4>Integrated HMI</h4>
										<h4><small class="text-muted">San Francisco</small></h4>
									</div> <!-- .info-box-title -->
									<div class="detail-box-content">
										<p>Nobis luptatum platonem sit ad, ius ex saperet luptatum, facer eirmod perfecto in est. An tantas impedit vivendo has. Per an zril disputando, regione corrumpit consequat ne vim. Mea soleat menandri an, mei conceptam inciderint an..</p>
									</div> <!-- .info-box-content -->

									<div class="detail-box-footer">
										<button type="button" class="btn btn-dark" name="button">Learn More</button>
									</div> <!-- /.info-box-footer-> -->
								</div>
							</div>

							<div class="col-12 order-1 col-md-5 order-md-2">
								<div class="graphic component-fade">
									<div class="nested-detail-title">
										<h1>SFMTA</h1>
										<h4>Integrated HMI</h4>
										<h4><small class="text-muted">San Francisco</small></h4>
									</div>
									<div class="graphic-box-title graphic-magenta">
										<h1 class="header-4">a</h1>
									</div> <!-- .info-box-title -->

									<div class="graphic-box-content">
										<p class="lead">something really cool</p>
									</div> <!-- /.info-box-content -->

									<div class="nested-detail-content">
										<p>Eam stet velit honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
									</div>

									<div class="nested-detail-footer">
										<button type="button" class="btn btn-dark" name="button">Learn More</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> <!-- /#detail-section -->

				<section id="detail-section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-5">
								<div class="graphic component-fade">
									<div class="nested-detail-title">
										<h1>Sound Transit</h1>
										<h4>University Link Light Rail</h4>
										<h4><small class="text-muted">Seattle</small></h4>
									</div>

									<div class="graphic-box-title graphic-yellow">
										<h1>a</h1>
									</div> <!-- .info-box-title -->

									<div class="graphic-box-content">
										<p class="lead">i can't believe how cool this is</p>
									</div> <!-- /.info-box-content -->

									<div class="nested-detail-content">
										<p>Eam stet velit honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
									</div>

									<div class="nested-detail-footer">
										<button type="button" class="btn btn-dark" name="button">Learn More</button>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7">
								<div class="detail detail-right">
									<div class="detail-box-title">
										<h1>Sound Transit</h1>
										<h4>University Link Light Rail</h4>
										<h4><small class="text-muted">Seattle</small></h4>
									</div> <!-- .info-box-title -->
									<div class="detail-box-content">
										<p>Eam stet velit honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
									</div> <!-- .info-box-content -->

									<div class="detail-box-footer">
										<button type="button" class="btn btn-dark" name="button">Learn More</button>
									</div> <!-- /.info-box-footer-> -->
								</div>
							</div>
						</div>
					</div>

					<div class="separator separator-transparent"></div>
				</section> <!-- /#detail-section -->

				<!-- Call to Action Section
				============================================== -->
				<section id="concluding-section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="info info-conclusion">
									<div class="info-box-title">
										<h1>Wrap-Up Section</h1>
									</div> <!-- .info-box-title -->
									<div class="info-box-content">
										<p> Ea offendit contentiones his, alii reprehendunt ius id. Vim ne possim honestatis eloquentiam, eu has doming ancillae explicari.</p>
									</div> <!-- .info-box-content -->
								</div>
							</div>

							<div class="col-12">
								<div class="section-footer">
									<div class="section-footer-content">
										<button type="button" class="btn btn-light" name="button">Follow TSE</button>
									</div> <!-- /.info-box-footer-> -->
								</div>
							</div>
						</div>
					</div>

					<div class="separator separator-transparent"></div>
				</section> <!-- /#detail-section -->

				<div id="footer-breakpoint"></div>

				<!-- Affiliates Section
				============================================== -->
				<section id="affiliates-section">
					<div class="container">
						<div class="row">
							<div class="col-6 col-md-4">
								<div class="affiliate-logo">
									<img src="http://www.tseinc.us/wp-content/uploads/2016/12/BC-Logo-300dpi-3x3in-Transparent.png" alt="">
								</div>
							</div>

							<div class="col-6 col-md-4">
								<div class="affiliate-logo">
									<img src="http://www.tseinc.us/wp-content/uploads/2016/12/BART.png" alt="">
								</div>
							</div>

							<div class="col-6 col-md-4">
								<div class="affiliate-logo">
									<img src="http://www.tseinc.us/wp-content/uploads/2016/12/sfmta.png" alt="">
								</div>
							</div>

							<div class="col-6 col-md-4">
								<div class="affiliate-logo">
									<img src="http://www.tseinc.us/wp-content/uploads/2016/12/Chicago-CTA.png" alt="">
								</div>
							</div>

							<div class="col-6 col-md-4">
								<div class="affiliate-logo">
									<img src="http://www.tseinc.us/wp-content/uploads/2016/12/LA-metro.png" alt="">
								</div>
							</div>

							<div class="col-6 col-md-4">
								<div class="affiliate-logo">
									<img src="http://www.tseinc.us/wp-content/uploads/2016/12/NCTD.gif" alt="">
								</div>
							</div>
						</div>
					</div>
				</section> <!-- /#affiliates-section -->
			</div> <!-- /#wrapper -->
<?php
get_footer();
