<?php
/**
 * The template for displaying all single Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TSE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
		if( have_posts() ) :
			the_post()
		?>

		<!-- Fullscreen Hero
		============================================== -->
		<div id="fullscreenHero" class="fullscreen-hero">
			<div class="hero-bg">
				<div class="hero-container">
					<div class="hero-content">
						<h2 class="display-4"><?php the_title() ?></h2>
					</div> <!-- /.hero-content -->
				</div> <!-- /.hero-container -->
			</div> <!-- /.hero-bg -->
		</div> <!-- /#hero .fullscreen-hero -->

	<?php endif; ?>
			<h2>single-cpt_projects.php</h2>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
