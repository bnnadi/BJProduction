<?php
 require_once('models/view.php');
 
 class BlogForm {
 	function get($pairs,$data = '') {
 		$view_model = new View();
		$view_model->getView("header");
 		$view_model->getView("blogForm");
        
        if (empty($_POST)) {
            echo "<p>FILL ALL THE FIELDS</p>";
        } else {
            include_once('validators/blogvalidator.php');

            $formFields = array(
                'title' => $_POST['title'],
                'topic' => $_POST['topic'],
                'content' => $_POST['content']
            );

            $validator = new BlogValidator();
            $message = $validator->validate($formFields);
            
            if ($message == "valid") {
                include_once('database/makeblog.php');
                
                $userID = $_SESSION["userid"];
                $title = $formFields['title'];
                $topic = $formFields['topic'];
                $content = $formFields['content'];
                
                $create = new MakeBlog();
                $create->create($userID, $title, $topic, $content);
            } else {
                echo $message;
            }   
        }
        
 		$view_model->getView("footer");
	}
 }

?>