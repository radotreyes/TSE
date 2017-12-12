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
								<div id="indexHeroBtn" class="fixed-bottom">
									<div class="container">
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</div>
								</div>
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

<?php endif; ?>

					<!-- Featurette Section(s)
					============================================== -->
<?php
	$details = get_field( 'index_details' );
	if( $details ) :
		$featurette_title_id = preg_replace( '/(\s+)/i', '', $details[0]['title'] );
		get_dynamic_template_part( array(
				'title_id'	=> $featurette_title_id,
				'title'			=> $details[0]['title'],
				'subtitle'	=> $details[0]['subtitle'],
				'detail'		=> $details[0]['detail'],
				'excerpt'		=> $details[0]['excerpt'],
				'content'		=> $details[0]['content'],
				'align'			=> $details[0]['align']
			),
			'section',
			'featurette'
		);
?>

				<!-- Highlight Carousel
				============================================== -->
				<section id="placeholder" class="hero">
						<div class="hero-bg hero-dark">
							<div class="hero-container">
								<div class="hero-content">
									<div class="subsection section-body">
										<h4 class="section-title display-4">
											(placeholder for fancy dynamic element)
										</h4>
									</div>
								</div>
							</div>
						</div>
				</section> <!-- /#conclusion -->

<?php
		if( count( $details ) > 1 ) {
			$featurette_title_id = preg_replace( '/(\s+)/i', '', $details[1]['title'] );
			get_dynamic_template_part( array(
					'title_id'	=> $featurette_title_id,
					'title'			=> $details[1]['title'],
					'subtitle'	=> $details[1]['subtitle'],
					'detail'		=> $details[1]['detail'],
					'excerpt'		=> $details[1]['excerpt'],
					'content'		=> $details[1]['content'],
					'align'			=> $details[1]['align']
				),
				'section',
				'featurette'
			);
		}

	endif; /* /if( $details ) */
?>

<?php
	$features = get_field( 'index_features' );
	if( $features ) :
		foreach( $features as $feature ) :
			$feature_title_id = preg_replace( '/(\s+)/i', '', $feature['title'] );
?>

				<style id="<?php echo $title_id; ?>" media="screen">
					<?php echo '#' . $feature_title_id; ?>Overlay {
						background-color: <?php echo $feature['color']; ?>;
					  background-image: url( <?php echo $feature['img']; ?> );
						<?php
							if( get_field( 'home_use_parallax' ) ) {
								echo 'background-attachment: fixed;';
							}
						?>
					}

					<?php echo '#' . $feature_title_id; ?>Bg {
						background-color: rgba(0, 0, 0, 0.5);
					}
				</style>

				<!-- Hero Section
				============================================== -->
				<section id="<?php echo $feature_title_id; ?>Overlay" class="hero">
					<div id="<?php echo $feature_title_id; ?>Bg" class="hero-bg">
						<div class="hero-container">
							<div class="hero-content">
								<h2 class="section-title display-4"><?php echo $feature['title']; ?></h2>
								<p class="lead"><?php echo $feature['content']; ?></p>
								<br><br />
								<a href="<?php echo $feature['link']; ?>">
									<div class="btn btn-ghost" name="button">
										<?php echo $feature['button']; ?>
									</div>
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
									<h1 class="section-title display-4">OUR SOLUTIONS</h1>
								</div>
							</div>
						</div>
					</div>


<?php
	$projects = get_field( 'index_projects' );
	if( $projects ) : // make sure the repeater field exists
		foreach( $projects as $project ) : // loop through the repeater
			if( $project['the_project'] ) : // make sure the post exists
				$post = $project['the_project']; // set post variable

				if( $project['thumbnail'] ) :
					$project_title_id = preg_replace( '/(\s+)/i', '', get_the_title() );
?>

				<style id="<?php echo $project_title_id; ?>" media="screen">
					<?php echo '#' . $project_title_id; ?> {
						background-position: center;
						background-repeat: no-repeat;
						background-size: cover;
					  border-radius: 15px;


						background-color: <?php echo $project['color']; ?>;
						background-image: url( <?php echo $project['thumbnail']; ?> );
						/*padding: 1.5em;*/
					}

					<?php echo '#' . $project_title_id; ?> > * {
						min-height: 300px;
					  background-position: center;
					  background-repeat: no-repeat;
					  background-size: cover;

						padding: 1.5em;
					  border-radius: 15px;
						background-color: rgba(255, 241, 227, 0.85);
					}

					@media screen and ( min-width: 768px ) {
						<?php echo '#' . $project_title_id; ?> > * {
							background: none;
						}
					}

				</style>

<?php
				endif;
				setup_postdata( $post ); // override current post data

				$terms = get_the_terms( get_the_ID(), 'cpt_clients' ); // retrieve current post terms
				get_dynamic_template_part( array(
						'subsection_align'	=> $project['align'],
						'title_id'					=> $project_title_id,
						'project_client'		=> implode( ', ', wp_list_pluck( $terms, 'name' ) ),
						'project_title'			=> get_the_title(),
						'project_loc'				=> get_field( 'project_location' ),
						'project_desc'			=> get_the_excerpt()
					),
					'subsection',
					'project'
				);

			endif;
		endforeach;
		// clear post data
		wp_reset_postdata();
	endif;
?>

					<div class="subsection section-footer"></div>
					<div class="separator separator-transparent"></div>
				</section> <!-- #detail-section -->

<?php
	$conclusion = get_field( 'index_conclusion' );
	if( $conclusion ) :
?>
				<!-- Call to Action Section
				============================================== -->
				<section id="conclusion" class="hero">
						<div class="hero-bg hero-dark">
							<div class="hero-container">
								<div class="hero-content">
									<div class="subsection section-body">
										<h2 class="section-title display-4"><?php echo $conclusion['title']; ?></h2>

										<p><?php echo $conclusion['content']; ?></p>
									</div>

									<div class="subsection section-footer">
										<a href="<?php echo $conclusion['link']; ?>">
											<button type="button" class="btn btn-ghost" name="button">
												<?php echo $conclusion['button']; ?>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
				</section> <!-- /#conclusion -->

<?php endif; ?>


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
