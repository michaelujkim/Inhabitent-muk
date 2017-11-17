<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
			h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
			height: 100% !important; width: 100% !important;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
			h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
			height: auto !important; width: auto !important;background-size:320px 65px !important;padding-bottom:40px !important;}                            
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

function inhabitent_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

function inhabitent_login_logo_url_title() {
	return 'Priggidy Project 4';
}
add_filter( 'login_headertitle', 'inhabitent_login_logo_url_title' );


function inhabitent_dynamic_css(){
	if(!is_page_template('page-templates/about.php')){
		return;
	}

	$image = CFS()->get('about_header_image');

	if (!$image){
		return;
	}
	
	$hero_css = ".page-template-about .entry-header {
		background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
		url({$image}) no-repeat center bottom;
		background-size: cover, cover;
		 }
		";

		wp_add_inline_style('tent-style', $hero_css);
	

}
add_action('wp_enqueue_scripts','inhabitent_dynamic_css');
