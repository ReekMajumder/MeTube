<?php

function login_query($username,$password){
	$query= "
	select * from users where
	username= '".$username."'
	AND password= '".$password."'
	";
	return $query;
}

function register_query($username,$password,$firstname,$gender,$dateofbirth,$email,$lastname=""){
	$query = "INSERT INTO users (username, password, firstname,gender,dob,email,lastname)
VALUES ('$username','$password','$firstname','$gender','$dateofbirth','$email','$lastname')";

return $query;
}

function remove_registered_user($username){
	$query = "DELETE FROM users WHERE username='$username'";
}
?>
