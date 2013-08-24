<?php
 require_once('models/view.php');
 
 class SignIn {
 	function get($pairs,$data = '') {
        
        if ($_SESSION['loggedin']) {
//            echo "<h2 class='cta'>" . $_SESSION['username'] . " has logged in.</h2>";
            $username = $_SESSION["username"];
        }
        else if (!empty($_POST)) {
            include_once("database/login.php");
        } else {
            $username = "guest";
        }
        
 		$view_model = new View();
		$view_model->getView("header");
	
 		/*if (empty($pairs[action])) {
			 $action= 'home';
			$view_model->getView($action);
		 }elseif ($pairs[action] =='logIn') {
			 $action= 'logIn';
			 $view_model->getView($action);
		}else {
			 $action = $pairs['action'];
			 $view_model->getView($action);
		 }*/
        
        $view_model->getView("logIn");
 		$view_model->getView("footer");
	}
 }

?>