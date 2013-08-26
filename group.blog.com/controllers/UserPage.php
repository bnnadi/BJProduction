<?php
 require_once('models/view.php');
 
 class UserPage {
 	function get($pairs,$data = '') {
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
        
        include_once ("database/connection.php");
        
        if ($_GET['action'] == 'delete') {
            include_once ("database/delete.php");
        }
        
        $user = $_SESSION['userid'];
        $query = "SELECT * FROM Blog WHERE userID = '$user'";
        $result = mysql_query($query);
        
        echo "<div class='clear'></div>";
        echo "<div class='blog_info_column'>";
        while ($blog = mysql_fetch_array($result)) {
            $title = $blog['title'];
            $topic = $blog['topic'];
            $content = $blog['content'];
            $time = $blog['time'];
            $blogID = $blog['blogID'];
            
            echo "<div class='blog_piece'>";
            echo "<h3 class='title'>".$title."</h3>";
            echo "<p class='topic'>".$topic."</p>";
			echo "<div class='topLine'></div>";
			echo "<div id='niceBlock'></div>";			
            echo "<p class='content'>".$content."</p>";            
            echo "<p class='time'>".$time."</p>";
            echo "<a class='delete_link' href='?page=userpage&action=delete&blogid=$blogID'>Delete Blog</a>";
            echo "<a class='modify_link' href='?page=modifyblog&action=modify&blogid=$blogID'>Modify Blog</a>";
            echo "</div>";
        }
        echo "</div>";
        
 		$view_model->getView("footer");
	}
 }

?>