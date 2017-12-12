<?php
/*
 * Template Name: Project Portfolio
 */

get_header(); ?>

<?php
// DEBUG
// foreach( $query as $key => $value ) {
// 	echo $key . ' => ' . $value;
// 	echo '<br />';
// }
// echo '<br />';
	$project = get_queried_object();
	foreach( $project as $key => $value ) {
			echo $key . ' => ' . $value;
			echo '<br />';
	}
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Call to Action Section
			============================================== -->
			<section id="conclusion" class="hero hero-sm">
				<div class="hero-bg hero-dark">
					<div class="hero-container">
						<div class="hero-content">
							<div class="subsection section-body">
								<h2 class="section-title display-4"><?php echo $project->name ?></h2>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- /#conclusion -->

			<section class="featurette">
				<div class="subsection section-header"></div>

				<div class="subsection section-body">
					<div class="container">
						<div class="row">
<?php
if( have_posts() ) :
	while( have_posts() ) :
		the_post();
?>

							<div class="col-12 col-md-6">
								<div class="featurette-bg">
										<div class="subsection subsection-sm section-header"></div>

										<div class="subsection subsection-sm section-body">
											<h1><?php the_title() ?></h1>
											<h4><small class="text-muted"><?php echo get_field( 'project_location' ); ?></small></h4>
										</div>
									</div>
							</div>

<?php
	endwhile;
endif;
?>
						</div>
					</div>
				</div>

				<div class="subsection section-footer"></div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
