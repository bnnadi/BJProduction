<?php
 require_once('models/view.php');
 
 class Home {
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
        
        $section = $_GET['section'];
        
        if ($section == "Technology") {
            $query = "SELECT * FROM Blog WHERE topic = 'technology';";
        } 
        else if ($section == "Music") {
            $query = "SELECT * FROM Blog WHERE topic = 'music';";
        }
        else if ($section == "Sports") {
            $query = "SELECT * FROM Blog WHERE topic = 'sports';";
        }
        else if ($section == "Miscellanous") {
            $query = "SELECT * FROM Blog WHERE topic = 'miscellanous';";
        } else {
            $query = "SELECT * FROM Blog;"; 
        }
        
        $result = mysql_query($query);
        
        echo "<div class='clear'></div>";
        echo "<div class='blog_info_column'>";
        while ($blog = mysql_fetch_array($result)) {
            $title = $blog['title'];
            $topic = $blog['topic'];
            $content = $blog['content'];
            $time = $blog['time'];
            
            $userID = $blog['userID'];
            $user = mysql_query("SELECT * FROM People WHERE userID = '$userID';");
            $user = mysql_fetch_array($user);
            $user = $user['username'];
            
            $queryContent = file_get_contents("http://api.duckduckgo.com/?q=".$title."&format=json&pretty=1");
            $queryContent = json_decode($queryContent);
            $tag = $queryContent->AbstractURL;
            
            echo "<div class='blog_piece'>";
            echo "<h3 class='title'>".$title."</h3>";
            echo "<p class='topic'>".$topic."</p>";
			echo "<div class='topLine'></div>";
			echo "<div id='niceBlock'></div>";
            echo "<p class='content'>".$content."</p>";  
            echo "<a href='$tag' class='result'>".$tag."</a>";
            echo "<p class='user'>".$user."</p>";
            echo "<p class='time'>".$time."</p>";
            echo "</div>";
        }
        echo "</div>";
        
        $view_model->getView("home");
        
        /*if ($_SESSION['loggedin'] == 'true')
        {
            $view_model->getView("userDashboard");
        }*/
        
 		$view_model->getView("footer");
	}
 }

?>