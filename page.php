<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">

				    <?php get_sidebar('left'); ?>
			
				    <div id="main" class="large-9 medium-9 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>