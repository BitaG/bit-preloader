<?php 
class Model_Position extends Model
{


	public function get_position(){
		$option_json	= get_option('bitPreloader');
		$data 			= json_decode($option_json);
		$result 		= $data->position;

		return $result;

	}

		public function update_position($position){
		$option_json	= get_option('bitPreloader');
		$data 			= json_decode($option_json);
		$data->position 	= $position;
		$value 			= json_encode($data);
		// update data
		update_option( 'bitPreloader', $value );
	}

}