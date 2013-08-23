<?php
		
class Validate{
	
	function validateForm($array){
		
		$errors = array();
		$first = $array["fname"];
		$last = $array["lname"];
		$email = $array["email"];
		$phone = $array["phone"];
		$password = $array["password"];
		$confirm = $array["confirm"];	
		
		// checkNames($first);
		// checkNames($last);
		checkEmail($email);
		checkPhone($phone);
		checkPasswords($password,$confirm);
		return $errors;
	}
	
	function checkNames($name){
		if(preg_match("/[a-zA-Z]*/", $name)) {

			}	else {
				$errors[] ="Please enter the correct email address";
			}
	}
	
	function checkEmail($email){
					if(preg_match("/\d+[a-zA-Z]+@\w+\.\w+/", $email)) {
						
			}	else {
			$response = "Please enter the correct email address";
			}
	}
	
	function checkPhone($phone){
		
			if(preg_match("/[+][0-9]\d{2}-\d{3}-\d{4}/", $phone)) {

			}	else {
				$response ="Please enter the correct phone number";
			}
	}
	
	function checkPasswords($password, $confirm){
		
		if($password == $confirm){
			
		}else {
			$response ="The passwords do not match, please try again";
		}
	return $response;		
	}
}

class Secure{
	
	function hashing($password){
    
		return md5($password);
	}
	
	function salting(){
		$salt = getSalt();
		
		return $salt;	
	}
	
	function getSalt(){
		$length = 6;
		$validChar = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+=-_{}[()/.,&#@*$%!]";
		$validCharLength= strlen($validChar);
		
		for ($i = 0; $i < $length; $i++){
			$index = mt_rand(0, $validCharLength - 1);
			$result = $validChar[$index];
		}
		return $result;
	}
}


?>