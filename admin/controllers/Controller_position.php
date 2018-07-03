<?php
class Controller_position extends Controller
{

	function __construct(){
		$this->model 	= new Model_position();
		$this->view  	= new View();
	}

	function action_index()
	{	
		if (isset($_POST['bitsc']) && $_POST['bitsc']=='bit'){

			if(isset($_POST['position'])){
				$this->model->update_position($_POST['position']);
			}
		}
		
		$position = $this->model->get_position();
		$this->view->generate('position_view.php',$position);
	}
}