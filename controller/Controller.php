<?php 
include("model/Model.php");

// Create a construct and create model object in it. 
// Then create another method to call data select related method and include the location where you want to show the data

class Controller {
	
	public $model;

	public function __construct(){
	 	$this->model = new Model();
	}

	public function home(){
		$user = $this->model->setStudentData();
		include 'view/home.php';

	}
}

?>