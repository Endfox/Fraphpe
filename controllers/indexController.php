<?php 

class indexController{

	public function index(){
		View::renderViews('includes/header','main/index','includes/footer');
	}
	
}