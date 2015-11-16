<?php
/**
*
*Template Name:about page
* @package RED_Starter_Theme
*/
get_header(); ?>


<div class= "motto"> 
<p> <?php echo ( CFS()->get('team_motto')); ?></p>
</div>
<div class="special">
	<div class="left-side">
	<p> <?php echo ( CFS()->get('left_block')); ?></p>
	</div>
	<div class="right-side">
	<p> <?php echo ( CFS()->get('right_block')); ?></p>
	</div>
</div>
<div class= "our-story"> 
	<p><?php echo ( CFS()->get('our_story')); ?></p>
</div>

<?php get_footer(); ?>