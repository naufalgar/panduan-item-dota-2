<?php
include "model/viewModel.php";
class viewController{
	public $model;
	public function __construct(){
		$this->model = new viewModel();
	}

	public function viewDetail($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		include "view/view_detail.php";
	}

	public function __destruct(){

	}
}
?>