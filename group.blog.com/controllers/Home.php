<?php
 require_once('models/view.php');
 
 class Home {
 	function get($pairs,$data = '') {
 		$view_model = new View();
		$view_model->getView("header");
	
 		if (empty($pairs[action])) {
			 $action= 'home';
			$view_model->getView($action);
		 }elseif ($pairs[action] =='logIn') {
			 $action= 'logIn';
			 $view_model->getView($action);
		}else {
			 $action = $pairs['action'];
			 $view_model->getView($action);
		 }
 		$view_model->getView("footer");
	}
 }

?>