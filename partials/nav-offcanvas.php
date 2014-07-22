<?php /*?><div class="large-12 columns show-for-medium-up">
	<div class="sticky">
	
		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->
	
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
				<?php joints_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<div class="large-12 show-for-small-only fixed"><?php */?>
<div class="large-12 show-for-small-only fixed">

	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section logo">
				<a href="<?php echo home_url(); ?>" rel="nofollow"><img src=" <?php echo get_template_directory_uri(); ?>/i/logo.jpg"/></a>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>

</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	

	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php //joints_main_nav(); ?>    
		<?php 
            wp_nav_menu(array(
                'container' => false,                           // remove nav container
                'container_class' => '',           // class of container (should you choose to use it)
                'menu' => __( 'The Mobile Menu', 'jointstheme' ),  // nav name
                'menu_class' => 'header-menu',         // adding custom nav class
                'theme_location' => 'mobile-menu',                 // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
            ));
        ?>
    </nav>
	</ul>

</aside>
			
<a class="exit-off-canvas"></a>