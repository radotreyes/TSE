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
	$id = preg_replace( '/(\s+)/i', '', get_the_title() );
?>

		<style id="<?php echo $id; ?>" media="screen">
			<?php echo '#' . $id ?>Bg {
				background-size: cover;
				background-position: center center;
				background-repeat: no-repeat;
				background-image: url( <?php echo get_field( 'project_img' ); ?> );
				background-attachment: fixed;
			}

			<?php echo '#' . $id ?>Overlay {
				background-color: rgba(0, 0, 0, 0.6);
			}
		</style>

		<!-- Fullscreen Hero
		============================================== -->
		<div id="<?php echo $id ?>Bg" class="fullscreen-hero">
			<div id="<?php echo $id ?>Overlay" class="hero-bg">
				<div class="hero-container">
					<div class="hero-content">
						<h2 class="display-flex-1 display-bold"><?php the_title() ?></h2>
					</div> <!-- /.hero-content -->
				</div> <!-- /.hero-container -->
			</div> <!-- /.hero-bg -->
		</div> <!-- /#hero .fullscreen-hero -->

<?php endif; ?>
		<section>
			<div class="container">
				<div class="separator separator-transparent"></div>
				<div class="row align-items-center">
					<div class="col-12 col-md-9">
						<div class="subsection section-header"></div>

						<div class="subsection-left section-body">
							<h2 id="headline" class="display-flex-1 headline">
								<strong><?php the_field( 'project_headline') ?></strong>
							</h2>
							<div class="the-content">
								<?php the_content() ?>
							</div>
						</div>

						<div class="separator separator-transparent"></div>
						<div class="subsection section-footer">
							<?php
								// if( comments_open() || get_comments_number() ) {
								// 	comments_template();
								// }
			 				?>

							<!-- TODO: move the above code to a modal, use the below button
							to access it -->

							<button id="commentsButton" type="button" class="btn btn-creeper" data-toggle="modal" data-target="#commentsModal">
								SHARE YOUR THOUGHTS
							</button>
						</div>
					</div>

					<div id="sidebar" class="col-12 col-md-2 offset-md-1" style="background-color: var( --stone );">
					</div>

				<div class="separator separator-transparent"></div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="modal fade" id="commentsModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
					<?php
						if( comments_open() || get_comments_number() ) {
							comments_template();
						}
					?>
	      </div>
	      <div class="modal-footer">
	      </div>
	    </div>
	  </div>
	</div>

	<script>
		window.onload = init()
		window.onresize = update()

		function init() {
			adjustSidebarHeight()
		}

		function update() {
			adjustSidebarHeight()
		}

		function adjustSidebarHeight() {
			/* Resizes right-side blog post, project post sidebar on event. */
			const upper = document.getElementById( 'headline' )
			const lower = document.getElementById( 'commentsButton' )

			let height = Math.abs(
				lower.getBoundingClientRect().bottom - upper.getBoundingClientRect().top
			)

			document.getElementById( 'sidebar' ).style.height = `${ height }px`
		}
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
