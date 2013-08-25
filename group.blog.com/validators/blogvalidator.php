<?php

class BlogValidator {

function validate($array) {
	$title = $array["title"];
	$topic = $array["topic"];
	$content = $array["content"];

	if (empty($title) || empty($topic) || empty($content)) {
		return "Please fill all the fields correctly.";
	}

	return "valid";
}

}

?>
