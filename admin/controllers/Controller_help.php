<?php
class Controller_help extends Controller
{
	function action_index()
	{	
		$this->view->generate('help_view.php');
	}
}