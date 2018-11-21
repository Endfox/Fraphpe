<?php 

class Redirect{

	static function redirectTo($controller, $method=null){
		if(isset($method) && !empty($method)){
			header("Location:/?con=$controller&met=$method");
		}
		else{
			header("Location:/?con=$controller");
		}
		
	}

}