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
    $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[rand(0, $max)];
    }
    return $str;
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

	header('location:../views/login.php?alert=loginfirst');
  exit(1);
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
  if(isset($email))
  {



    global $pdo;


    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();



    if($user !== false && $email == $user['email'])
    {
      $resetkey = RandomString();
      $created = DateTimeNow();
      $empfaenger = $user['email'];
      $betreff = "Ihr Passwort für ORGNZD. wurde zurückgesetzt.";
      $from = "From: ORGNZD Team <team@orgnzd.de>\n";
      $from .= "Reply-To: team@orgnzd.de\n";
      $from .= "Content-Type: text/html\n";
      $text = "Liebe(r) ".$user['name']."<br /><br />
              Dein Passwort bei ORGNZD wurde zur&uuml;ckgesetzt.<br />
              Bitte klicke <a href='https://orgnzd.lennartvonwerder.de/views/reset.php?usrId=".$user['id']."&&resetkey=".$resetkey."'>hier</a> um es neu zu setzten. <br /><br />
              Mit lieben Gr&uuml;&szlig;en,<br />
              Dein ORGNZD-Team.";

      mail($empfaenger, $betreff, $text, $from);
      print_r($empfaenger);

      $sql ="UPDATE user
               SET resetkey = '{$resetkey}', log = '{$created}'
               WHERE id = {$user['id']};";
      $pdo->exec($sql);
      echo("<script language='javascript' type='text/javascript'>
        var weiterleitung = '../views/login.php?';\nwindow.setTimeout('window.location = weiterleitung',0);
        </script>");
    }
    else
    {
      echo("<script language='javascript' type='text/javascript'>
        alert('Diese E-Mail-Adresse gibt es nicht.');
        var weiterleitung = '../views/reset.php';\nwindow.setTimeout('window.location = weiterleitung',0);
        </script>");
    }
  }

}

function changePassword($newpassword, $userId)
{

  global $pdo;

  $log = DateTimeNow();
  $statement = $pdo->prepare("UPDATE user SET password = '{$newpassword}', log = '{$log}' WHERE id = :usrId");

  $result = $statement->execute(array('usrId' => $userId));
  $pdo->exec($sql);
  echo("<script language='javascript' type='text/javascript'>
    alert('Dein Passwort wurde geändert.');
    var weiterleitung = '../views/login.php';\n
    window.setTimeout('window.location = weiterleitung',0);
    </script>");
}


// Projects

function projects($userid)
{
    global $pdo;



    return $pdo->query('SELECT * FROM projects WHERE userid = "{$userid}" ');
}

function addProject($userid, $name, $type, $description, $duedate)
{
    global $pdo;

    $created = DateTimeNow();

    $log = DateTimeNow();

    $sql = "INSERT INTO projects (userid, name, type, description, duedate, log, created)
      VALUES ('{$userid}', '{$name}', '{$type}','{$description}', '{$duedate}', '{$log}', '{$created}')";
      $pdo->exec($sql);



    header('location:../views/start.php');


}



?>
