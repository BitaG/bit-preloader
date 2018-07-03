<?php
class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function generate($bit_view, $data = null)
	{
		include '/../views/'.$bit_view;
	}
}