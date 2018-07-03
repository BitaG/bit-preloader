<?php 
add_action( 'wp_head', 'preloader_init' );
$option = json_decode( get_option( 'bitPreloader' ));

function preloader_init(){
		global $option;

	if(  	$option->position 	== 	'frontpage' 	and is_front_page()
		or 	$option->position 	== 	'homepage' 		and is_home()
		or 	$option->position 	==	'attachment' 	and is_attachment()
		or 	$option->position 	==	'post'			and is_single()
		or 	$option->position 	==	'page' 			and is_page()
		or 	$option->position 	== 	'cat'  			and is_category()
		or  $option->position 	== 	'tag' 			and is_tag()
		or 	$option->position 	==	'404error' 		and is_404()
		or  $option->position 	== 	'all'	
		){	print_preload(); }

	if( $option->position 	== 	'shortcode'	){ add_shortcode( 'bitpreloader', 'print_preload' );}	
}

function print_preload(){
	global $option;

	wp_enqueue_style( 'preloader', plugin_dir_url( __FILE__ ).'assets/css/preload.css' );
    wp_enqueue_script('preload-js',plugin_dir_url( __FILE__ ).'assets/js/index.js');
	$file  = 'mod/'.$option->design.'.php';
	include_once( $file );
}