<?php
 require_once('models/view.php');
 
 class SignUp {
 	function get($pairs,$data = '') {
 		$view_model = new View();
		$view_model->getView("header");
        $view_model->getView("signUp");
        
        if (empty($_POST)) {
            echo "<p>FILL ALL THE FIELDS</p>";
        } else {
            include_once('validators/formvalidator.php');

            $formFields = array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password']
            );

            $validator = new FormValidator();
            $message = $validator->validate($formFields);
            
            if ($message == "valid") {
                include_once('database/createsql.php');

                $user = $formFields['username'];
                $email = $formFields['email'];
                $pass = $formFields['password'];

                $create = new CreateSQL();
                $create->create($user, $email, $pass);
                header('Location: index.php');
            } else {
                echo $message;
            }   
        }
        
 		$view_model->getView("footer");
	}
 }

?>