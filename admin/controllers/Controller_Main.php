<?php
class Controller_main extends Controller{
	
	function action_index(){
		$this->view->generate('Main_view.php');
	}
}