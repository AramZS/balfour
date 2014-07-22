<?php if ( has_nav_menu( 'primary-menu' )) {?>
<div class="large-12 show-for-medium-up">
    <nav class="primary-menu menu-wrap clearfix">
        <?php 
            wp_nav_menu(array(
                'container' => false,                           // remove nav container
                'container_class' => '',           // class of container (should you choose to use it)
                'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
                'menu_class' => 'header-menu',         // adding custom nav class
                'theme_location' => 'primary-menu',                 // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
            ));
        ?>
    </nav>
</div>
<?php } ?>