<?php
/*
 * Template Name: Project Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h2 class="display-3">Project Portfolio (in progress)</h2>

			<div id="body-breakpoint"></div>


<?php
$posts = query_posts( 'post_type=cpt_projects' );
$terms = get_terms( array(
	'taxonomy'		=> 'cpt_clients',
	'hide_empty'	=> true
) );

foreach( $terms as $term ) :
	// DEBUG
	// foreach( $term as $key => $value ) {
	// 	echo $key . ' => ' . $value;
	// 	echo '<br />';
	//
	// }
	if( $term->count ) :
		$featurette_title_id = preg_replace( '/(\s+)/i', '', $term->name );
?>

			<style id="<?php echo $featurette_title_id; ?>" media="screen">
				<?php echo '#' . $featurette_title_id; ?>Overlay {
					background-image: url( <?php echo get_field( 'img', $term ); ?> );
				}

				<?php echo '#' . $featurette_title_id; ?>Bg {
					background-color: rgba(0, 0, 0, 0.5);
				}
			</style>

			<!-- Hero Section
			============================================== -->
			<section id="<?php echo $featurette_title_id; ?>Overlay" class="hero hero-sm">
				<div id="<?php echo $featurette_title_id; ?>Bg" class="hero-bg">
					<div class="hero-container">
						<div class="hero-content">
							<div class="container">
								<div class="row">
									<div class="col-1"></div>
									<div class="col-4">
										<div class="subsection-right">
											<h2 class="section-title display-4"><?php echo $term->name ?></h2>
										</div>
									</div>
									<div class="col-4 align-left">
										<div class="subsection-left">
											<?php echo $term->description ?>
										</div>
									</div>
									<div class="col-1"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- /#hero -->

<?php
			// get_dynamic_template_part( array(
			// 		'title_id'	=> $featurette_title_id,
			// 		'title'			=> $term->name,
			// 		'subtitle'	=> 'test',
			// 		'detail'		=> 'test',
			// 		'excerpt'		=> 'test',
			// 		'content'		=> 'test',
			// 		'align'			=> 'left'
			// 	),
			// 	'section',
			// 	'client'
			// );
		endif;
	endforeach;
?>


			<div id="footer-breakpoint"></div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
