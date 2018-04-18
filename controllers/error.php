<?php 

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class _Error extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index($param = "NULL") {
        if($param === "NULL") {
            $this->view->msg = 'Ta strona nie istnieje';
        } else {
            $this->view->msg = 'Ta strona nie istnieje<br />'.$param;
        }
		$this->view->render('error/index');
	}
}

?>