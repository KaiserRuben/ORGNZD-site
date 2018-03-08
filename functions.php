<?php
session_start();

// Database


require('db.php');



// Functions


function DateTimeNow() {
    $tz_object = new DateTimeZone('Europe/Berlin');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}

function RandomString($length = 150){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function login($email, $password)
{

    if(isset($email) && isset($password))
    {
      


      global $pdo;


      $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
      $result = $statement->execute(array('email' => $email));
      $user = $statement->fetch();

      

      if($user !== false && $password == $user['password'])
      {
        $_SESSION['id'] = $user['id'];
        header('location:../views/start.php');
        exit(1);
      }
      else
      {
        header('location:../views/login.php?alert=falsepass');
        exit(1);
      }
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
		header('location:../views/login.php?alert=loginfirst');
		exit(1);
	}
}

function addNewUser($email, $name, $password)
{

  global $pdo;

  $created = DateTimeNow();

	$log = DateTimeNow();

  // Email überprüfen ob schon da

  $sql = "SELECT id FROM user WHERE email='{$email}'";
  $row = $pdo->query($sql);
  $data_array = $row->fetchAll();

  if($data_array){

    echo("<script language='javascript' type='text/javascript'>
    alert('Diese E-Mail gibt es schon, bitte gib eine neue ein oder überprüfe dein Passwort.');
    var weiterleitung = '../views/register.php';\nwindow.setTimeout('window.location = weiterleitung',0);
    </script>");
  }else{

	  $sql = "INSERT INTO user (email, name, password, log, created)
      VALUES ('{$email}', '{$name}', '{$password}', '{$log}', '{$created}')";
      $pdo->exec($sql);

  }

  header('location:../views/login.php?alert=registrated');

}

function userName($id)
{
  global $pdo;

    $sql = "SELECT * FROM user WHERE id = '$id' LIMIT 1";
    foreach ($pdo->query($sql) as $row) {
        $name = $row['name'];
        
    }

    

    return $name;
}

function changePasswordsendEmail($email)
{
	// Email zum zurücksetzen senden

}

function changePassword($newpassword, $hash)
{
	// Code aus der mail überprüfen, password ändern
}


