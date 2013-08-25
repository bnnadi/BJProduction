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
        
        /*include_once('models/view.php');
        include_once('database/connection.php');

        $view = new View();
        $view->printHeader();
        $view->getView('header');

        $query = "SELECT * FROM People;";
        $result = mysql_query($query);

        echo "<div class='datagrid'>";
        while($person = mysql_fetch_array($result)) {
            $user = $person["username"];
            $email = $person["email"];

            echo "<div class='row'>";
            echo "<p class='user'>" . $user . "</p>";
            echo "<p class='email'>" . $email . "</p>";
            echo "</div>";
        }
        echo "</div>";*/
        
        include_once ("database/connection.php");
        $query = "SELECT * FROM Blog";
        $result = mysql_query($query);
        
        echo "<div class='clear'></div>";
        echo "<div class='blog_info_column'>";
        while ($blog = mysql_fetch_array($result)) {
            $title = $blog['title'];
            $topic = $blog['topic'];
            $content = $blog['content'];
            
            echo "<div class='blog_piece'>";
            echo "<h3 class='title'>".$title."</h3>";
            echo "<p class='topic'>".$topic."</p>";
            echo "<p class='content'>".$content."</p>";
            echo "</div>";
        }
        echo "</div>";
        
        $view_model->getView("home");
        
        if ($_SESSION['loggedin'] == 'true')
        {
            $view_model->getView("userDashboard");
        }
        
 		$view_model->getView("footer");
	}
 }

?>