<?php

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Controller {
	
	function __construct() {

		$this->view = new View();
		if (Session::get('loggedIn') == false) {
			Session::init();
		}
	}
	
	public function loadModel($name) {
		
		$path = 'model/'.$name.'_model.php';
		
		if(file_exists($path)) {
			require 'model/'.$name.'_model.php';
			
			$modelName = $name.'_Model';
			$this->model = new $modelName;
		}
		
	}
	
	
	
}

?>