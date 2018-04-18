<?php

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Model {
	
	function __construct() {
		$this->db = new Datebase();
	}
	
	public function set($name, $value) {
        $this->$name=$value;
    }
	
}

?>