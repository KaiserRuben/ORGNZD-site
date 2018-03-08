<?php
session_start();

// Database



// Functions


function login($email, $password)
{
  	$sql = "SELECT password, id FROM user WHERE email={$email}";
  	$pdo->query($sql) as $row;

  	if($row['password'] = $password){

    	$_SESSION['id'] = $row['id'];

    	header('location:../views/start.php')
    	exit(1);

	}else{

    header('location:../views/login.php?alert=wrong')
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

function DateTimeNow() {
    $tz_object = new DateTimeZone('Europe/Berlin');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}
