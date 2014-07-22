<?php
/*
Template Name: Page: left & right sidebars
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">

				    <?php get_sidebar('left'); ?>
			
				    <div id="main" class="large-6 medium-6 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->

				    <?php get_sidebar('right'); ?>
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
