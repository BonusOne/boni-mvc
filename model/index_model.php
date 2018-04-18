<?php

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Index_Model extends Model {
	
	function __construct() {
		parent::__construct();
	}
    
    function textData() {
        $variable = "Hello there! I'm simple function in Model with variable with text!";
        
        return $variable;
    }
		
}

?>