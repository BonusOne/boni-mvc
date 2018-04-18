<?php 

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Admin extends Controller {
	
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		
		if($logged == false or Session::get('type') >= 3) {
			//Session::destroy();
			header("Location: /index");
			exit;
		}
		
		$this->view->js = array('admin/js/js.js', 'admin/js/jquery.datetimepicker.js');
		$this->view->chartAPI = true;
		//print_r($_SESSION);
	}
	
	function index() {

		$this->view->render('admin/index');
	}
	
	
	function user() {
        
		$this->view->set('userData', $this->model->UsrList());
		$this->view->render('admin/user');
	}
	
	
	
	
}

?>