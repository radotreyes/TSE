<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<?php
	$hero = get_field( 'index_hero' );
	if( $hero ) :
?>

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
		background-color: <?php echo $hero['color']; ?>;
		background-image: url( <?php echo $hero['img']; ?> );
	}

	#conclusion .hero-bg {
		background-color: <?php the_field( 'conclusion_bg_color' ) ?>;
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
														'<img src="' . $hero['logo'] . '">'
												);
											}
											else {
												echo(
														'<h1 class="marquee">' . $hero['headline'] . '</h1>'
												);
											}
										?>
									</div>
								</h1>
								<p class="lead"><?php echo $hero['tagline'];?></p>
							</div> <!-- /.hero-content -->
						</div> <!-- /.hero-container -->
					</div> <!-- /.hero-bg -->
				</div> <!-- /#hero .fullscreen-hero -->

<?php endif; ?>

				<div id="body-breakpoint"></div>

				<!-- What We Do Section
				============================================== -->

<?php
	$overview = array(
		'meta'			=> get_field( 'index_overview' )['meta'],
		'details'		=> get_field( 'index_overview' )['details']
	);

	if( $overview ) :
?>

				<section id="overview">
					<div class="separator separator-transparent"></div>
					<div class="subsection section-header">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h1 class="section-title display-4"><?php echo $overview['meta']['title']; ?></h1>
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
												<h2><?php echo $overview['details']['title_1']; ?></h2>
											</div>
										</div> <!-- .info-box-title -->

										<div class="info-box-content">
											<p><?php echo $overview['details']['content_1']; ?></p>
										</div> <!-- /.info-box-content -->
									</div>
								</div>

								<div class="col-12 col-sm-6 col-md-4">
									<div class="info">
										<div class="info-box-title">
											<div class="info-title info-title-secondary">
												<h2><?php echo $overview['details']['title_2']; ?></h2>
											</div>
										</div> <!-- .info-box-title -->
										<div class="info-box-content">
											<p><?php echo $overview['details']['content_2']; ?></p>
										</div> <!-- .info-box-content -->
									</div>
								</div>

								<div class="col-12 col-sm-6 col-md-4">
									<div class="info">
										<div class="info-box-title">
											<div class="info-title info-title-tertiary">
												<h2><?php echo $overview['details']['title_3']; ?></h2>
											</div>
										</div> <!-- .info-box-title -->
										<div class="info-box-content">
											<p><?php echo $overview['details']['content_3']; ?></p>
										</div> <!-- .info-box-content -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="subsection section-footer">
						<div class="row">
							<div class="col-12">
								<a href="<?php echo $overview['meta']['button_link']; ?>">
									<button type="button" class="btn btn-dark" name="button">
										<?php echo $overview['meta']['button_text']; ?>
									</button>
								</a>
							</div>
						</div>
					</div>

					<div class="separator separator-transparent"></div>

					<!-- Featurette Section(s)
					============================================== -->

<?php endif; ?>

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
					</div>
			</section> <!-- #hoverCarousel -->

<?php
	$features = get_field( 'index_features' );
	if( $features ) :
		foreach( $features as $feature ) :
			$the_title = preg_replace( '/(\s+)/i', '', $feature['title'] );
?>

				<style id="<?php echo $the_title; ?>" media="screen">
					<?php echo '#' . $the_title; ?> {
						background-color: <?php echo $feature['color']; ?>;
					  background-image: url( <?php echo $feature['img']; ?> );
					}
				</style>

				<!-- Hero Section
				============================================== -->
				<section class="hero">
					<div id="<?php echo $the_title; ?>" class="hero-bg">
						<div class="hero-container">
							<div class="hero-content">
								<h1 class="display-2"><?php echo $feature['title']; ?></h1>
								<br />
								<p class="lead"><?php echo $feature['content']; ?></p>
								<br><br />
								<a href="<?php echo $feature['link']; ?>">
									<button type="button" class="btn btn-dark" name="button">
										<?php echo $feature['button']; ?>
									</button>
								</a>
							</div>
						</div>
					</div>
				</section> <!-- /#hero -->

<?php
		endforeach;
	endif;
?>

				<!-- Projects Section
				============================================== -->
				<section class="featurette">
					<div class="separator separator-transparent"></div>
					<div class="subsection section-header">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h1 class="section-title display-4">Our Solutions</h1>
								</div>
							</div>
						</div>
					</div>

					<?php
						/* ACF code goes here
							if( have_rows( ... ) ) {
								while( have_rows( ... ) ) {
									// get the data associated with that row
									// load each project in the format presented below
								}
							}
						*/
						$query_people = new WP_Query( array(
							'post_type'				=> 'cpt_key_people'
						) );

						echo( $query_people->have_posts() );
						if( $query_people->have_posts() ) {
							while( $query_people->have_posts() ) {
								$query_people->the_post();
								the_title();
							}
						}


						$query_projects = new WP_Query( array(
							'post_type'				=> 'cpt_projects',
							'posts_per_page'	=> '3',
						) );


						/* Eventually remove this from a loop and allow ACF to dictate
						 * exactly which projects to show, including some formatting */

						if( $query_projects->have_posts() ) {
							while( $query_projects->have_posts() ) {
								$query_projects->the_post();
								/* querying for project details... */
								// the_terms( get_the_ID(), 'cpt_clients' )['name'];
                //
								// the_ID();
								// the_title();
								// the_content();
								// the_excerpt();

								$terms = get_the_terms( get_the_ID(), 'cpt_clients' );
								the_terms( get_the_ID(), 'cpt_clients' );

								get_dynamic_template_part( array(
										'subsection_align'	=> 'left',
										'project_client'		=> implode( ', ', wp_list_pluck( $terms, 'name' ) ),
										'project_title'			=> get_the_title(),
										'project_loc'				=> get_field( 'project_location' ),
										'project_desc'			=> get_the_excerpt()
									),
									'subsection',
									'project'
								);
							}
						}

						/* using ACF relational field to get specific post data */
					// 	if( get_field( 'project_displayed' ) ) {
					// 		$post = get_field( 'project_displayed' );
					// 	}
          //
					// 	$terms = get_the_terms( get_the_ID(), 'cpt_clients' );
          //
					// 	get_dynamic_template_part( array(
					// 			'subsection_align'	=> 'left',
					// 			'project_client'		=> implode( ', ', wp_list_pluck( $terms, 'name' ) ),
					// 			'project_title'			=> get_the_title(),
					// 			'project_loc'				=> get_field( 'project_location' ),
					// 			'project_desc'			=> get_the_excerpt()
					// 		),
					// 		'subsection',
					// 		'project'
					// 	);
					// ?>

					<div class="subsection section-footer"></div>
					<div class="separator separator-transparent"></div>
				</section> <!-- #detail-section -->

				<!-- Call to Action Section
				============================================== -->
				<section id="conclusion" class="hero">
						<div class="hero-bg">
							<div class="hero-container">
								<div class="hero-content">
									<div class="subsection section-body">
										<h2 class="section-title display-4">Wrap-Up Section</h2>

										<p>Ea offendit contentiones his, alii reprehendunt ius id. Vim ne possim honestatis eloquentiam, eu has doming ancillae explicari.</p>
									</div>

									<div class="subsection section-footer">
										<button type="button" class="btn btn-light" name="button">Call to Action</button>
									</div>
								</div>
							</div>
						</div>
				</section> <!-- /#conclusion -->

				<div id="footer-breakpoint"></div>

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

<?php
get_footer();
