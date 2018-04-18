<?php

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Index extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		//$this->view->render('index/index', 1); //for $noInclude in View
        
        $this->view->set('textData', $this->model->textData());
		$this->view->render('index/index');
	}
	
	function details() {
		$this->view->render('index/index');
	}
}

?>