<?php
add_action('admin_menu', 'bit_preloader_menu');

function bit_preloader_menu() {
	add_options_page('Preloader', 'Preloader', 'manage_options', 'bit-preloader', 'bit_preloader_admin_init');
}

function bit_preloader_admin_init(){
	//bootstrap 4 style
	wp_enqueue_style('bootstrap4', plugin_dir_url( __FILE__ ).'views/assets/css/bootstrap.min.css' ); 
	//admin style
	wp_enqueue_style( 'bit-preloader-admin', plugin_dir_url( __FILE__ ).'views/assets/css/style.css' );
	//animate style
	wp_enqueue_style( 'animate', plugin_dir_url( __FILE__ ).'views/assets/css/animate.css' );
	//icon
	wp_enqueue_style( 'icons', plugin_dir_url( __FILE__ ).'views/assets/css/icons.css' );

	require_once('bitcore/functions.php');	
	require_once('bitcore/model.php');
	require_once('bitcore/view.php');
	require_once('bitcore/controller.php');
	require_once('bitcore/route.php');
	
	BitRoute::start();
}

