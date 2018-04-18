<?php

/**
 * @author Paweł Liwocha / PawelDesign
 * @copyright 2017
 */

class Bootstrap {
	
	function __construct() {
		
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
            $controller->loadModel('index');
			$controller->index();
			return false;
		} else {
    		$file = 'controllers/'.$url[0].'.php';
    		if (file_exists($file)) {
    			require $file;
    		} else {
    			$this->error("Za chwil&#281; zostaniesz przeniesiony na stron&#281; g&#322;&#243;wn&#261;.");
                header('Refresh: 2; url=/index.php');
                exit;
    		}
            $controller = new $url[0];
            $controller->loadModel($url[0]);
        }

        (int)$ilPodstron = count($url)-1;

		if (isset($url[$ilPodstron]) and $ilPodstron >= 1) {
			//echo $url[0].'   '.$url[1].'   '.$url[2].'   ';
			if (method_exists($controller, $url[$ilPodstron])) {
				$controller ->  { $url[$ilPodstron] } ();
			} else {
				$this->error();
			}
		} else {
				$controller->index();
		}
		
	}
	
	function error($param = "") {
		require 'controllers/error.php';
		$controller = new _Error();
		$controller->index($param);
		return false;
	}
}

?>