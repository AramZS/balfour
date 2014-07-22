<?php
//Custom functions

// Remove extra nav menus
function remove_default_menu(){
	unregister_nav_menu('header-menu');
}
add_action( 'after_setup_theme', 'remove_default_menu', 11 );

// Add extra menus
register_nav_menus( array(
	'primary-menu' => __( 'Primary Menu', '_s' ),
	'secondary-menu' => __( 'Secondary Menu', '_s' ),
	'mobile-menu' => __( 'Mobile Menu', '_s' ),
));

function remove_some_widgets(){
	unregister_sidebar( 'sidebar1' );
}
add_action( 'init', 'remove_some_widgets', 11 );
// Register sidebars and widgets
function add_sidebars_init() {	
	register_sidebar(array(
  		'id' => 'sidebar-left',
		'name' => __('Left Sidebar', 'jointstheme'),
		'description' => __('The left sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'sidebar-right',
		'name' => __('Right Sidebar', 'jointstheme'),
		'description' => __('The right sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'sidebar-blog',
		'name' => __('Blog Sidebar', 'jointstheme'),
		'description' => __('The blog sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'sidebar-utility',
		'name' => __('Utility Sidebar', 'jointstheme'),
		'description' => __('Utility sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}
add_action('widgets_init', 'add_sidebars_init', 21);



