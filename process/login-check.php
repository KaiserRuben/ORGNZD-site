<?php

include('../functions.php');

if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] !== '' && $_POST['password'] !== ''){

	$email = $_POST['email'];
	$password = $_POST['password'];

	login($email, $password);

}else{
	echo 'Es fehlen Daten.';
}
