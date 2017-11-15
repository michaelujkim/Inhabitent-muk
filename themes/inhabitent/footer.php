<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info footer-info-des" >
				<div>
						<h1 class="footer-text">Contact Us</h1>
						<p>Email</p>
						<p>telephon</p>
						<a class="social-media-icons">socialmedia</a>
				</div>
				<div>
					<h1  class="footer-text">Business Hours</h1>
					<p>Monday-Friday: 9am - 5pm </p>
					<p>Saturday: 10am - 2pm </p>
					<p>Sunday: Closed </p>


				</div>
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
