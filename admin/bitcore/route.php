<?php 
class BitRoute{
	static function start(){
 		$controller_name 	= 'main';
 		$action_name 		= 'index';
 		$plugin_mode 		= $_GET['mode'];
 		$plugin_action 		= $_GET['action'];

 		// отримуєм ім'я контролера
 		if ( null != $plugin_mode){
 			$controller_name = $plugin_mode;
 		}

 		// отримуєм екшн
 		if ( null != $plugin_action ){
 			$action_name = plugin_action;
 		}

 		// одаєм префікси 
 		$model_name 		= 'Model_'.$controller_name;
 		$controller_name 	= 'Controller_'.$controller_name;
 		$action_name 		= 'action_'.$action_name;


 		$model_file 		= strtolower($model_name).'.php';
 		$model_path 		= substr(plugin_dir_path(__FILE__), 0, -9).'/models/'.$model_file;

 		// підключаєм файл моделі 
 		if ( file_exists($model_path)) {
  				include'/../models/'.$model_file;	
 		}

 		$controller_file 	= strtolower($controller_name).'.php';
 		$controller_path 	= substr(plugin_dir_path(__FILE__), 0, -9).'/controllers/'.$controller_file;
 		// підключаєм файл контролера 
 		if ( file_exists($controller_path)){
 				include'/../controllers/'.$controller_name.'.php';


 			$controller = new $controller_name;
 			$action = $action_name;

 			if(method_exists($controller, $action)){$controller ->$action();}

 		}
 		else{
 			BitRoute::Page404();
 		}
	
 	}


 	function Page404(){
 		$page404 = substr(plugin_dir_path(__FILE__), 0, -9).'/views/ErrorPage.php';
 		include $page404;
 	}



}