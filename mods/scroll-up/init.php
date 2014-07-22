<?php 
function scrollup_init() {
	wp_enqueue_script('scrollup_js', get_template_directory_uri() . '/mods/scroll-up/scroll-up.js', false, null,true);
	wp_enqueue_style( 'scrollup_css', get_template_directory_uri() . '/mods/scroll-up/scroll-up.css' );
}
add_action('wp_enqueue_scripts', 'scrollup_init',999);
?>