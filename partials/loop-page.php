<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<?php 
    global $post;
    if(get_post_meta($post->ID,'_cmb_title_checkbox',true) == '') { 
    ?> 
        <header class="article-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header> <!-- end article header -->
    <?php } ?>

    <section class="entry-content clearfix" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
	</footer> <!-- end article footer -->
						    
	<?php // comments_template(); ?>
					
</article> <!-- end article -->
