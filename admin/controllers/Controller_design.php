<?php
class Controller_design extends Controller
{
	function __construct(){
		$this->model 	= new Model_design();
		$this->view  	= new View();

	}

	function action_index()
	{	
		if (isset($_POST['bitsc']) && $_POST['bitsc']=='bit'){

			if(isset($_POST['design'])){
				$this->model->update_design($_POST['design']);
			}
		}


		$design = $this->model->get_design();
		$this->view->generate('design_view.php',$design);
	}
}