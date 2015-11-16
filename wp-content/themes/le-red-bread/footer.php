<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-block-item">
		<div class="contact">
			<h3>Contact</h3>
			<p> <i class="fa fa-envelope"></i> info@leredbread.com </p>
			<p><i class="fa fa-phone"></i> (555) 343 456 7891</p>
	<i class="fa fa-facebook-square"></i>
			<i class="fa fa-twitter-square"></i>
			<i class="fa fa-google-plus-square"></i>
</div>
	<div class="footer-logo">
		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo-white.svg"/>
	</div>
	<div class="business-hours">
							<h3>Business Hours</h3>
							<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
							<p><span class="day-of-week">Sunday:</span> Closed</p>
						</div>
					</div>
				</div>
				<div class="site-info">
					<div class="container">
						Copyright © 2015 Le Red Bread
					</div>
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	