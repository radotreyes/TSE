<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TSE
 */

?>

	<!-- Affiliates Section
	============================================== -->
	<?php
	/* ACF code goes here
		if( have_rows( ... ) ) {
			while( have_rows( ... ) ) {
				// get the data associated with that row
				// load each project in the format presented below
			}
		}
	*/
	?>
	<section id="affiliates-section">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-4">
					<div class="affiliate-logo">
						<img src="http://www.tseinc.us/wp-content/uploads/2016/12/BC-Logo-300dpi-3x3in-Transparent.png" alt="">
					</div>
				</div>

				<div class="col-6 col-md-4">
					<div class="affiliate-logo">
						<img src="http://www.tseinc.us/wp-content/uploads/2016/12/BART.png" alt="">
					</div>
				</div>

				<div class="col-6 col-md-4">
					<div class="affiliate-logo">
						<img src="http://www.tseinc.us/wp-content/uploads/2016/12/sfmta.png" alt="">
					</div>
				</div>

				<div class="col-6 col-md-4">
					<div class="affiliate-logo">
						<img src="http://www.tseinc.us/wp-content/uploads/2016/12/Chicago-CTA.png" alt="">
					</div>
				</div>

				<div class="col-6 col-md-4">
					<div class="affiliate-logo">
						<img src="http://www.tseinc.us/wp-content/uploads/2016/12/LA-metro.png" alt="">
					</div>
				</div>

				<div class="col-6 col-md-4">
					<div class="affiliate-logo">
						<img src="http://www.tseinc.us/wp-content/uploads/2016/12/NCTD.gif" alt="">
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#affiliates-section -->

	<!-- Footer
	============================================== -->
	<footer class="the-footer">
		<div class="row">
			<div class="col-12 col-md-4 no-gutters">
				<div class="footer-credits">
					<div class="row">
						<div class="col-6">
							<p class="lead">
								tse, inc.
								<br /><a href="#"><small class="text-muted">About</small></a>
								<br /><a href="#"><small class="text-muted">Portfolio</small></a>
								<br /><a href="#"><small class="text-muted">Blog</small></a>
								<br /><a href="#"><small class="text-muted">Careers</small></a>
							</p>
						</div>
						<div class="col-6">
							<p class="lead">
								Contact Us
								<br /><a href="#"><small class="text-muted">contact@tseinc.us</small></a>
								<br /><a href="#"><small class="text-muted">(555)-555-5555</small></a>
							</p>
						</div>

					</div>
				</div>
			</div>
			<div class="col-12 col-md-8 no-gutters">
				<div class="footer-widget">
				</div>
			</div>
		</div>
	</footer> <!-- /footer -->

	<!-- Modal
	============================================== -->
	<div></div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'WordPress site crafted by %s.' ), '<a href="https://radotreyes.github.io">Reuben Reyes</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
