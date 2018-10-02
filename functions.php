<?php
/*================================================
#Load the Parent theme style.css file
================================================*/
function wpninja_enqueue_styles() {
	wp_enqueue_style( 'divi-parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpninja_enqueue_styles' );

/*================================================
#Load the translations from the child theme folder
================================================*/
function wpcninja_translation() {
	load_child_theme_textdomain( 'Divi', get_stylesheet_directory() . '/lang/theme/' );
	load_child_theme_textdomain( 'et_builder', get_stylesheet_directory() . '/lang/builder/' );
}
add_action( 'after_setup_theme', 'wpcninja_translation' );

/*Load Custom Image Module Into Divi Back end Builder */
function divi_child_theme_add_custom_module() {
	get_template_part( 'custom-modules/Image' );
}
add_action('et_builder_ready', 'divi_child_theme_add_custom_module' );

/*something*/