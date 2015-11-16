<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="hero">
		
		<span class="hero-text">Baked to perfection.</span>
	</div>
</div>

	<div class="type">
	<?php 
        $taxonomy = 'product-type';
        $terms = get_terms($taxonomy);
        if ($terms):foreach($terms as $term): ?> 
        <li>
        
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/> 
        
            <h3><?php echo $term->name;?></h3>
            <p><?php echo $term->description;?><a href="<?php echo get_term_link($term); ?>">See more...</a></p>
        </li>
         
            <?php endforeach; 
                    ?>
            <?php endif; ?>
        </div>    

	<section class="call-to-action clearfix">
         <p>
            <span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
            <a href="http://localhost:8888/le-red-bread/products/"><button class="btn">See Our Products</button></a>
         </p>
    </section>
​<div class="post">
<?php
  $args = array( 'posts_per_page' => 4, 'post_type' => 'post' );
  $blog_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
	<li>

      <?php the_post_thumbnail('medium'); ?><br>
       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
       <p><?php the_time ('d M Y'); ?> </p>
       <p> <?php comments_number('0 Comments'); ?></p>
   </li>

   <?php endforeach; wp_reset_postdata(); ?>
</div

<div class="testimonial">
  <?php
  $taxonomy = '';
  $terms = get_terms($taxonomy);
        if ($terms):foreach($terms as $term): ?> 
        <li>
        
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/> 
        
            <h3><?php echo $term->name;?></h3>
            <p><?php echo $term->description;?><a href="<?php echo get_term_link($term); ?>">Health Time Clinic...</a></p>
        </li>
         
            <?php endforeach; 
                    ?>
            <?php endif; ?>
        </div>
        <div>
        <?php
  $args = array( 'posts_per_page' => 2, 'post_type' => 'post' );
  $blog_posts = get_posts( $args ); // returns an array of posts
?>    


	<?php get_footer(); ?>
