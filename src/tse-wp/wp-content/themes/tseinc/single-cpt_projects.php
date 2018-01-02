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
	the_post();
	$project_title_id = preg_replace( '/(\s+)/i', '', get_the_title() );
?>

		<style id="<?php echo $project_title_id; ?>" media="screen">
			<?php echo '#' . $project_title_id ?> {
				background-image: url( <?php echo get_field( 'project_img' ); ?> );
				background-attachment: fixed;
			}
		</style>

		<!-- Fullscreen Hero
		============================================== -->
		<div class="fullscreen-hero">
			<div id="<?php echo $project_title_id ?>" class="hero-bg">
				<div class="hero-container">
					<div class="hero-content">
						<h2 class="display-4"><?php the_title() ?></h2>
					</div> <!-- /.hero-content -->
				</div> <!-- /.hero-container -->
			</div> <!-- /.hero-bg -->
		</div> <!-- /#hero .fullscreen-hero -->

<?php endif; ?>
		<section class="the-content">
			<div class="separator separator-transparent"></div>
			<div class="subsection section-header">
			</div>

			<div class="subsection-left section-body">
				<div class="container">
					<?php the_content() ?>
				</div>
			</div>

			<div class="subsection section-footer">
			</div>

			<div class="separator separator-transparent"></div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
		// console.log( document.getElementById( 'fullscreenHero' ).scrollHeight )
		// let bg = document.querySelector( '.hero-bg' )
		// bg.style.backgroundColor = 'rgb( 255, 255, 255 )'
		// addClass( 'stop-scrolling', 'body' )
		// let override = overrideScrollFor( ticks = 255 )
		// window.addEventListener( 'scroll', function() {
		// 	let preventScrolling = override.next().value
		// 	if( preventScrolling ) {
		// 		bg.style.backgroundColor = `rgb( ${preventScrolling}, ${preventScrolling}, ${preventScrolling} )`
		// 	}
		// } )
    //
		// function* overrideScrollFor( ticks = 999 ) {
		// 	while( ticks ) {
		// 		yield ticks-=1
		// 	}
		// }
    //
		// function addClass( className, targetElement ) {
		// 	const ele = document.querySelector( targetElement )
		// 	ele.className += ' ' + className
		// }
    //
		// function rmClass( className, targetElement ) {
		// 	const ele = document.querySelector( targetElement )
		// 	ele.className = ele.className.replace( className, '' )
		// }

	</script>

<?php
get_footer();
