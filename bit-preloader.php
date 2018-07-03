<?php
/*
Plugin Name: bit-preloader
Description: Preloader
Author: Eugene Bilovol
Version: 0.9 - alfa
Author URI: http://bitabit.com.ua/
*/

add_option(	'bitPreloader', '{"status":"on","position":"shortcode", "design":"load-1"}', '', 'yes' );

if ( !is_admin() ){
	 	require_once('public/bit-preloader-public.php');
} 
else{
		require_once('admin/bit-preloader-admin.php');
}