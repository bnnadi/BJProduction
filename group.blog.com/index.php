<?php
session_start();
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
}

// $test  = "{'name': 'Bisike', 'school': 'Full Sail', 'city': 'Orlando'}";
// 
// $t =array(
	// 'name'=> 'Biske',
	// 'city' => 'Orlando',
	// 'school' => "Full Sail"
// );
// 
// $encodeT = json_encode($t);
// 
// $u =json_decode($encodeT);
// 
// echo $u -> name . " goes to school at ". $u->school;
// 
// $url = "http://www.theverge.com/2013/8/19/4635588/microsoft-tag-2d-hccb-barcode-support-ending-2015";
// $stuff =file_get_contents($url);
// echo $stuff;
?>