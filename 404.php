<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-12 medium-12 columns first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header">
								<h1><?php _e("Epic 404 - Article Not Found", "jointstheme"); ?></h1>
							</header> <!-- end article header -->
					
							<section class="entry-content">
								<p><?php _e("The article you were looking for was not found, but maybe try looking again!", "jointstheme"); ?></p>
							</section> <!-- end article section -->

							<section class="search">
							    <?php get_search_form(); ?>
							</section> <!-- end search section -->
						
							<?php /*?><footer class="article-footer">
							    <p><?php _e("This is the 404.php template.", "jointstheme"); ?></p>
							</footer> <!-- end article footer --><?php */?>
					
						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>