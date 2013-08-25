<?php
 require_once('models/view.php');
 
 class BlogModify {
 	function get($pairs,$data = '') {
 		$view_model = new View();
		$view_model->getView("header");
        
        if (!empty($_POST)) {
            include_once('validators/blogvalidator.php');

            $formFields = array(
                'title' => $_POST['title'],
                'topic' => $_POST['topic'],
                'content' => $_POST['content']
            );

            $validator = new BlogValidator();
            $message = $validator->validate($formFields);
            
            if ($message == "valid") {
                include_once('database/modifyblog.php');
            } else {
                echo $message;
            }   
        }
        
        include_once("database/connection.php");
        $blogID = $_GET['blogid'];
        $query = "SELECT * FROM Blog WHERE blogID = '$blogID';";
        $result = mysql_query($query);
        $result = mysql_fetch_array($result);
        $_GET['title'] = $result['title'];
        $_GET['topic'] = $result['topic'];
        $_GET['content'] = $result['content'];
        
        $view_model->getView("blogForm");
 		$view_model->getView("footer");
	}
 }

?>