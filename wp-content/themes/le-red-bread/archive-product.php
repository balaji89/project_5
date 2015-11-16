<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<p>jfbsdjbvdsbv</p>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-producttypes">
				<div class="main-producttype">
			<?php $taxonomy = 'product-type'; ?>
			<?php $terms = get_terms($taxonomy); ?>
			<?php if ($terms): ?>
			<?php foreach ($terms as $term): ?> 
			<div class="individual-producttypes">
				<a href="<?php echo get_term_link($term); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/>
					<?php echo $term->name;?>
				</a>
			</div>
				
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
			

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="main-products">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-price">

				
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>
                <div class="title-money">
                	<div class="product-title">
                		<?php the_title('<span class="entry-title">', '</span>' ); ?>
                		</div>
                		<div class="product-money">            
                
                <span class= "price"> Price: <?php echo esc_html( CFS()->get('price')); ?></span>
            </div>
        </div>
    </div>
				
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
