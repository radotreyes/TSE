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

	</div><!-- #content -->

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
				<div class="section-header"></div>
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
