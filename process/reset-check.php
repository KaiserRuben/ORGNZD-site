<?php

include('../functions.php');

if(isset($_POST['email']) && $_POST['email'] !== ''){

	$email = $_POST['email'];

	changePasswordsendEmail($email);

}else{
	echo 'Fehler';
}
