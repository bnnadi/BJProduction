<?php

  if(empty($_SESSION) || empty($_SESSION['isLoggedIn'] )|| $_SESSION['isLoggedIn'] == FALSE){
    	header('Location: /home/form');
   	}else {
		   header("Location: /home");
	   }
?>