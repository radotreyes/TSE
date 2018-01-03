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

		$project_title_id = preg_replace( '/(\s+)/i', '', get_the_title() );
?>

							<style id="<?php echo $project_title_id; ?>" media="screen">
								<?php echo '#' . $project_title_id; ?> {
									background-position: center;
									background-repeat: no-repeat;
									background-size: cover;
									border-radius: 15px;

									background-color: #8a8a8a;
									background-image: url( <?php echo get_field( 'project_img' ); ?> );
									/*padding: 1.5em;*/
								}

								<?php echo '#' . $project_title_id; ?> > * {
									min-height: 300px;
								  background-position: center;
								  background-repeat: no-repeat;
								  background-size: cover;
									color: white;
									text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);

									padding: 1.5em;
								  border-radius: 15px;
									background-color: rgba(0, 0, 0, 0.6);
								}
							</style>

							<div class="col-12 col-md-6">
								<div id="<? echo $project_title_id; ?>">
				          <div class="card">

				            <div id="<? echo $project_title_id; ?>Overlay" class="subsection subsection-sm section-header"> </div>

				            <div class="subsection subsection-sm section-body">
											<h1 class="display-flex-4 display-bold"><?php the_title() ?></h1>
				              <h4><small class="text-muted"><?php echo get_field( 'project_location' ); ?></small></h4>
				              <p><?php the_excerpt() ?></p>
				            </div>

				            <div class="subsection subsection-sm section-footer">
				              <button type="button" class="btn btn-ghost" name="button">MORE</button>
				            </div>
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
