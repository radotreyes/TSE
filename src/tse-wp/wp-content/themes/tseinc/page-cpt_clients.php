<?php
/*
 * Template Name: Project Portfolio
 */

get_header(); ?>

<?php

$query = get_queried_object();
// DEBUG
foreach( $query as $key => $value ) {
	echo $key . ' => ' . $value;
	echo '<br />';

}

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Call to Action Section
			============================================== -->
			<section id="conclusion" class="hero">
					<div class="hero-bg hero-dark">
						<div class="hero-container">
							<div class="hero-content">
								<div class="subsection section-body">
									<h2 class="section-title display-4">all projects page</h2>

									<p>Aliquam purus sit amet luctus venenatis. Tincidunt nunc pulvinar sapien et. Nulla aliquet porttitor lacus luctus accumsan. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Suspendisse potenti nullam ac tortor vitae purus. Venenatis a condimentum vitae sapien.</p>
								</div>

								<div class="subsection section-footer">
								</div>
							</div>
						</div>
					</div>
			</section> <!-- /#conclusion -->

			<section class="featurette">
				<div class="subsection section-header">
					<h2 class="display-4 section-header">OUR CUSTOMERS</h2>
				</div>

				<div class="subsection section-body">

<?php
$terms = get_terms( array(
	'taxonomy'		=> 'cpt_clients',
	'hide_empty'	=> true
) );


$toggle = 0;
foreach( $terms as $term ) :
	// DEBUG
	// foreach( $term as $key => $value ) {
	// 	echo $key . ' => ' . $value;
	// 	echo '<br />';
  //
	// }
	if( $term->count ) :
		$featurette_title_id = preg_replace( '/(\s+)/i', '', $term->name );
		$featurette_title_pretty = preg_replace( '/(\s+)/i', '<br />', $term->name );

		$align_2 = $toggle ? 'left' : 'right';
		$align_1 = $toggle ? 'right' : 'left';
		$order_2 = $toggle ? 1 : 2;
		$order_1 = $toggle ? 2 : 1;
?>

						<style id="<?php echo $featurette_title_id; ?>" media="screen">
							<?php echo '#' . $featurette_title_id; ?>Bg {
								width: auto;
								margin: 1em 2em;
								border-radius: 25px;
								background-image: url( <?php echo get_field( 'img', $term ); ?> );
								box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
							}

							<?php echo '#' . $featurette_title_id; ?>Overlay {
								width: auto;
								min-height: 350px;
								border-radius: 25px;
								margin: 1em auto;
								background-color: rgba(0, 0, 0, 0.6);
							}
						</style>

						<!-- Hero Section
						============================================== -->
						<div id="<?php echo $featurette_title_id; ?>Bg" class="hero hero-sm">
							<div id="<?php echo $featurette_title_id; ?>Overlay" class="hero-bg">
								<div class="hero-container">
									<div class="hero-content">
										<div class="row align-items-center justify-content-center">
											<div class="col-6 col-md-3 order-<?php echo $order_1; ?>">
												<div class="subsection-<?php echo $align_2; ?>">
													<h2 class="display-2"><?php echo $featurette_title_pretty ?></h2>
													<a href="/projects/<?php echo $term->slug ?>">
														<button type="button" class="btn btn-ghost btn-expand-<?php echo $align_1; ?>" name="button">
															SEE OUR WORK
														</button>
													</a>
												</div>
											</div>
											<div class="col-6 col-md-3 order-<?php echo $order_2; ?>">
												<div class="subsection-<?php echo $align_1; ?>">
													<?php echo $term->description ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- /#hero -->

<?php
			$toggle = $toggle ? 0 : 1;
		endif;
	endforeach;
?>

			</div>
			<div id="footer-breakpoint"></div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
