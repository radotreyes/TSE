<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<!-- Dynamic CSS
================================================ -->
<style id="dynamicCSS" media="screen">
	<?php
		if( get_field( 'home_use_parallax' ) ) {
			echo (
				'.hero-bg {   background-attachment: fixed;		}'
			);
		}
	?>

	#fullscreenHero .hero-bg {
		background-color: <?php the_field( 'fullscreen_hero_bg_color' ) ?>;
		background-image: url( <?php the_field( 'fullscreen_hero_bg' ) ?> );
	}
</style> <!-- /#dynamicCSS -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Wrapper
			================================================ -->
			<div id="wrapper">

				<!-- Fullscreen Hero
				============================================== -->
				<div id="fullscreenHero" class="fullscreen-hero">
					<div class="hero-bg">
						<div class="hero-container">
							<div class="hero-content">
								<h1 class="marquee">
									<div class="marquee-wrapper">
										<?php
											if( get_field( 'fullscreen_hero_use_logo' ) ) {
												echo(
														'<img src="' . get_field( 'fullscreen_hero_logo' ) . '">'
												);
											}
											else {
												echo(
														'<h1 class="marquee">' . get_field( 'fullscreen_hero_text' ) . '</h1>'
												);
											}
										?>
									</div>
								</h1>
								<p class="lead"><?php the_field( 'fullscreen_hero_tagline' );?></p>
							</div> <!-- /.hero-content -->
						</div> <!-- /.hero-container -->
					</div> <!-- /.hero-bg -->
				</div> <!-- /#hero .fullscreen-hero -->

				<!-- What We Do Section
				============================================== -->
				<section id="overview">
					<div class="subsection section-header">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h1 class="section-title display-4"><?php the_field( 'overview_section_title' ); ?></h1>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-4">
									<div class="info">
										<div class="info-box-title">
											<div class="info-title info-title-primary">
												<h2><?php the_field( 'overview_title_1' ); ?></h2>
											</div>
										</div> <!-- .info-box-title -->

										<div class="info-box-content">
											<p><?php the_field( 'overview_detail_1' ); ?></p>
										</div> <!-- /.info-box-content -->
									</div>
								</div>

								<div class="col-12 col-sm-6 col-md-4">
									<div class="info">
										<div class="info-box-title">
											<div class="info-title info-title-secondary">
												<h2><?php the_field( 'overview_title_2' ); ?></h2>
											</div>
										</div> <!-- .info-box-title -->
										<div class="info-box-content">
											<p><?php the_field( 'overview_detail_2' ); ?></p>
										</div> <!-- .info-box-content -->
									</div>
								</div>

								<div class="col-12 col-sm-6 col-md-4">
									<div class="info">
										<div class="info-box-title">
											<div class="info-title info-title-tertiary">
												<h2><?php the_field( 'overview_title_3' ); ?></h2>
											</div>
										</div> <!-- .info-box-title -->
										<div class="info-box-content">
											<p><?php the_field( 'overview_detail_3' ); ?></p>
										</div> <!-- .info-box-content -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-footer">
						<div class="row">
							<div class="col-12">
								<a href="<?php the_field( 'overview_button_link' ); ?>">
									<button type="button" class="btn btn-dark" name="button">
										<?php the_field( 'overview_button_detail' ); ?>
									</button>
								</a>
							</div>
						</div>
					</div>

					<div class="separator separator-transparent"></div>
				</section> <!-- #second-section -->

				<!-- Featurette Section #1
				============================================== -->
				<section class="featurette">
					<div class="subsection section-header">
						<div class="container">
							<div class="row">
								<div class="col-12">
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-5">
									<div class="featurette-graphic component-fade">

										<div class="subsection subsection-sm section-header mobile-only">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="graphic-box-title graphic-yellow">
											<h1>a</h1>
										</div> <!-- .info-box-title -->

										<div class="subsection subsection-sm section-body mobile-only">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer mobile-only">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>

										<div class="subsection subsection-left subsection-sm section-footer"></div>

										<div class="graphic-box-content">
											<p class="lead">something cool</p>
										</div> <!-- /.info-box-content -->
									</div>
								</div>

								<div class="col-12 col-md-7">
									<div class="featurette-detail">
										<div class="subsection subsection-left subsection-sm section-header">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="subsection subsection-left subsection-sm section-body">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-left subsection-sm section-footer"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-footer"></div>
				</section> <!-- #detail-section -->

				<div class="separator separator-transparent"></div>

				<!-- Highlight Carousel
				============================================== -->
				<section id="hoverCarousel">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12 col-md-3">
								<div class="row">
									<div class="col-4 col-sm-4 col-md-12">
										<div id="tab-1" class="tab">
											<h1 class="lead">Power</h1>
										</div>
									</div>

									<div class="col-4 col-sm-4 col-md-12">
										<div id="tab-2" class="tab">
											<h1 class="lead">Controls</h1>
										</div>
									</div>

									<div class="col-4 col-sm-4 col-md-12">
										<div id="tab-3" class="tab">
											<h1 class="lead">Communications</h1>
										</div>
									</div>
								</div> <!-- /.row (nested 1) -->

							</div>

							<div class="col-sm-12 col-md-9">
								<div class="widescreen-wrapper">
									<div id="widescreen" class="widescreen">
										<h1 class="display-5">hover over categories to change this slideshow</h1>
									</div>
								</div>
							</div>

					</div> <!-- /.row (outer) -->
				</section> <!-- #hoverCarousel -->

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

				<!-- Featurette Section #1
				============================================== -->
				<section class="featurette">
					<div class="subsection section-header">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h1 class="section-title display-4">Our Solutions</h1>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-5">
									<div class="featurette-graphic component-fade">
										<div class="subsection subsection-sm section-header mobile-only">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="graphic-box-title graphic-cyan">
											<h1>a</h1>
										</div> <!-- .info-box-title -->

										<div class="subsection subsection-sm section-body mobile-only">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer mobile-only">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>

										<div class="subsection subsection-left subsection-sm section-footer"></div>

										<div class="graphic-box-content mobile-hide">
											<p class="lead">something cool</p>
										</div> <!-- /.info-box-content -->
									</div>
								</div>

								<div class="col-12 col-md-7 mobile-hide">
									<div class="featurette-detail">
										<div class="subsection subsection-left subsection-sm section-header">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="subsection subsection-left subsection-sm section-body">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-5 order-md-2">
									<div class="featurette-graphic component-fade">
										<div class="subsection subsection-sm section-header mobile-only">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="graphic-box-title graphic-yellow">
											<h1>a</h1>
										</div> <!-- .info-box-title -->

										<div class="subsection subsection-sm section-body mobile-only">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer mobile-only">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>

										<div class="subsection subsection-sm section-footer"></div>

										<div class="graphic-box-content mobile-hide">
											<p class="lead">something cool</p>
										</div> <!-- /.info-box-content -->
									</div>
								</div>

								<div class="col-12 col-md-7 order-md-1 mobile-hide">
									<div class="featurette-detail">
										<div class="subsection subsection-right subsection-sm section-header">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="subsection subsection-right subsection-sm section-body">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-5">
									<div class="featurette-graphic component-fade">
										<div class="subsection subsection-sm section-header mobile-only">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="graphic-box-title graphic-magenta">
											<h1>a</h1>
										</div> <!-- .info-box-title -->

										<div class="subsection subsection-sm section-body mobile-only">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer mobile-only">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>

										<div class="subsection subsection-left subsection-sm section-footer"></div>

										<div class="graphic-box-content mobile-hide">
											<p class="lead">something cool</p>
										</div> <!-- /.info-box-content -->
									</div>
								</div>

								<div class="col-12 col-md-7 mobile-hide">
									<div class="featurette-detail">
										<div class="subsection subsection-left subsection-sm section-header">
											<h1>BART</h1>
											<h4>Warm Springs Extension</h4>
											<h4><small class="text-muted">San Francisco Bay Area</small></h4>
										</div>

										<div class="subsection subsection-left subsection-sm section-body">
											<p>Eam stet veli t honestatis in, sumo corrumpit ei sit, in mea malis accusam deserunt. Vix civibus corpora patrioque in. Aeque omittam cum ea. Ne labitur equidem nec. Per id summo graeci expetendis.</p>
										</div>

										<div class="subsection subsection-sm section-footer">
											<button type="button" class="btn btn-dark" name="button">Learn More</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-footer"></div>
				</section> <!-- #detail-section -->

				<div class="separator separator-transparent"></div>

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

				<!-- Featurette Section #1
				============================================== -->
				<section id="fullscreen-hero-closure" class="hero">
					<div class="hero-bg fullscreen-hero-closure">
						<div class="hero-container">
							<div class="hero-content">
							</div>
						</div>
					</div>
				</section> <!-- /#fullscreen-hero-closure -->
			</div> <!-- /#wrapper -->

				<div id="footer-breakpoint"></div>

<?php
get_footer();
