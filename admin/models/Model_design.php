<?php 
class Model_design extends Model
{

	public function get_design(){
		$option_json	= get_option('bitPreloader');
		$data 			= json_decode($option_json);
		$result 		= $data->design;

		return $result;

	}

		public function update_design($design){
		$option_json	= get_option('bitPreloader');
		$data 			= json_decode($option_json);
		$data->design = $design;
		$value 			= json_encode($data);
		// update data
		update_option( 'bitPreloader', $value );
	}

}