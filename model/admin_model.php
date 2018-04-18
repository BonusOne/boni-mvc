<?php

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Admin_Model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	public function user_createDo() { //simpe create user function by called stored procedure in database
		
		$imie = htmlspecialchars(trim($_POST['imie']));
		$nazwisko = htmlspecialchars(trim($_POST['nazwisko']));
		$email = htmlspecialchars(trim($_POST['email']));
		$pass1 = md5($_POST['pass1']);
		$pass2 = md5($_POST['pass2']);
		$typ = htmlspecialchars(trim($_POST['typ']));
		
		if ($pass1 == $pass2) {
		
			$que = $this->db->query('call CreateUser("'.$email.'","'.$pass1.'","'.$imie.'","'.$nazwisko.'","'.$typ.'")');		
			$count = $que->rowCount();
			if($count > 0) {
				//Added
				return "Dodane";
			} else {
				//Error
				return "Niedodane";
			}
		} else {
			return "Hasła nie pasują do siebie";
		}
	}	
	
	function UsrList() { //simple getting data from database by stored procedure
		$que = $this->db->query('call SelectUser');
		$que->setFetchMode(PDO::FETCH_ASSOC);
		$data = $que->fetchAll();
		return $data;
	}
	
}

?>