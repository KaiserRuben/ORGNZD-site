<?php
session_start();

// Database


$pdo = new PDO('mysql:host=localhost;dbname=orgnzd', 'root', '');



// Functions


function DateTimeNow() {
    $tz_object = new DateTimeZone('Europe/Berlin');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}


function login($email, $password)
{

    global $pdo;

  	$sql = "SELECT password, id FROM user WHERE email={$email}";
  	$row = $pdo->query($sql);

  	if($row['password'] = $password){

    	$_SESSION['id'] = $row['id'];

    	header('location:../views/start.php');
    	exit(1);

	}else{

    header('location:../views/login.php?alert=wrong');
    exit(1);

  	}
}

function logout()
{
	session_destroy();

	header('location:../views/login.php');
}

function auth()
{
	if(isset($_SESSION['id'])){

	}else{
		header('location:../views/login.php');
		exit(1);
	}
}

function addNewUser($email, $name, $password)
{

  global $pdo;

  // Email überprüfen ob schon da
	
  $created = DateTimeNow();

	$log = DateTimeNow();

	$sql = "INSERT INTO user (email, name, password, log, created)
    VALUES ('{$email}', '{$name}', '{$password}', '{$log}', '{$created}')";
    $pdo->exec($sql);

}

function changePasswordsendEmail($email)
{
	// Email zum zurücksetzen senden

}

function changePassword($newpassword, $hash)
{
	// Code aus der mail überprüfen, password ändern
}


