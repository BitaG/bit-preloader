<?php
class Model
{
	
	public function get_data(){	
		$option_json	= get_option('bitPreloader');
		$data 			= json_decode($option_json);

		return $result;

	}

}