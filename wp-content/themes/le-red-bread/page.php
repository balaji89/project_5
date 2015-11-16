<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="site-content">
	<div id="primary" class="content-area">
		<div class="contact-page">
  <div class="contact">
		
		<!-- <main id="main" class="site-main" role="main"> -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
		</div>
    <div class="contact-side">
    	<?php get_sidebar(); ?>
    </div>
</div>

	</div>	
	</div><!-- #primary -->
<?php get_footer(); ?>