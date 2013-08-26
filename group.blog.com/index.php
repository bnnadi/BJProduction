<?php

session_start();

$page = $_GET['page'];

if ($page == "signup") {
    include "controllers/SignUp.php";
    $instance = new SignUp();
    $instance->get($_GET);
}
else if ($page == "signin") {
    include "controllers/SignIn.php";
    $instance = new SignIn();
    $instance->get($_GET);
} 
else if ($page == "logout") {
    include "controllers/LogOut.php";
    include "controllers/SignIn.php";
    $instance = new SignIn();
    $instance->get($_GET);
} 
else if ($page == "createblog") {
    include "controllers/BlogForm.php";
    $instance = new BlogForm();
    $instance->get($_GET);
} 
else if ($page == "userpage") {
    include "controllers/UserPage.php";
    $instance = new UserPage();
    $instance->get($_GET);
}
else if ($page == "modifyblog") {
    include "controllers/BlogModify.php";
    $instance = new BlogModify();
    $instance->get($_GET);
} else {
    include "controllers/Home.php";
    $instance = new Home();
    $instance->get($_GET);
}

/*$homeInstance = new Home();
$homeInstance->get($_GET);*/

/*session_start();
include "controllers/Home.php";


if (empty ($_GET["controller"])) {
	$con = 'home';
}else{
	$con = $_GET["controller"];
}

if ($con == "home") {
	$homeInstance = new Home();
	$homeInstance->get($_GET);
}else{
	echo "the controller was not 'home'";
}*/

?>