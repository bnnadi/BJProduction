<?php
	class View {
		
		function printHeader(){
			header('Content-type: text/html');
		}
		
		function getView($file = '', $data = '') {
				
			$fullPath = "/Users/bisikennadi/Site/group.blog.com/views/$file.php";
			
			if (preg_match("/\w/", $file) && file_exists($fullPath)) {
				
				include($fullPath);
			}
		}
	}
?>
