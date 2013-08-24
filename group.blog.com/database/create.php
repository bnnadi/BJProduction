<?php

include "database/connection.php";

$name = $_POST['inputName'];
$desc = $_POST['inputDescription'];

if(!$_POST['submit']) {
	echo "please fill out the form";
	header('Location: index.php');
} else {
    // New Stuff
    $name = md5($name);
    $desc = md5($desc);

	mysql_query("INSERT INTO People (Name, Description)
                 VALUES ('$name', '$desc');") or die(mysql_error());
	header('Location: index.php');
}

?>
