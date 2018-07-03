<?php
	function kill_wp_info(){
		//===== отключить уведомление об обновлении плагинов и вордпресс=====//
		add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
		wp_clear_scheduled_hook('wp_version_check');
		remove_action( 'load-update-core.php', 'wp_update_plugins' );
		add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

	}

	function kill_footer(){
		add_filter ('update_footer', function ($default){return '';}, 999);
		add_filter ('admin_footer_text', function ($default){return '';});
	}

	function save_block(){
		echo'<div  id="bitloader" class ="bitinfo bounceIn animated"><i class="fas fa-circle-notch fa-spin"></i><span>СОХРАНЕНИЕ</span></div>';
	}