<?php

include('../functions.php');

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['name'] !== ''){

	$email = $_POST['email'];
	$password = $_POST['password'];
  	$name = $_POST['name'];



	addNewUser($email, $name, $password);

}else{
	echo 'Es fehlen Daten!';
}
