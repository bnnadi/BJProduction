<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Compartir</title>
		<meta name="description" content="" />
		<meta name="author" content="Bisike Nnadi" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<link href='http://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/css/main.css"/>
		
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>
	
	<body>
		<nav>
            <!-- <h1><a href="/">Blog Logo</a></h1> -->
			<h1><a href="?page=home">Compartir</a></h1>
            <ul>
                <!-- <li><a href="/home/logIn">Sign In</a></li> -->
                <!-- <li id="signUp"><a href="/home/signUP">Sign Up</a></li> -->
                <li><a href="?page=signin">Sign In</a></li>
                <li id="signUp"><a href="?page=signup">Sign Up</a></li>
			</ul>
			<p>Currently logged in as <span><?php 
                                              if ($_SESSION['loggedin'] == 'true') {
                                                  echo $_SESSION['username'];
                                                  echo "<a href='?page=logout' class='logout'>                                                             logout</a>";
                                              } else {
                                                  echo 'guest';
                                              } 
                                             ?></span></p>
		</nav>
		<div class="clear topLine"></div>