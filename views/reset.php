<?php
if(!isset($_GET['usrId'])){?>
<div class="content">

<h1>ORGNZD</h1>

<h3>Passwort vergessen</h3>

Email von deinem Account hier reintragen. Wir schicken Dir dann eine Email mit dem Link zum Zurücksetzen des Passwortes.

<form action="../process/reset-check.php" method="post">

<input type="email" name="email">


<input type="Submit" name="submit" value="Abschicken">


</form>




</div><?php }
else{
  if(isset($_GET['resetkey'])){
    //Erstmal Userdaten holen
    $statement = $pdo->prepare("SELECT * FROM user WHERE id = :usrId");
    $result = $statement->execute(array('usrId' => $_GET['usrId'])));
    $user = $statement->fetch();
    if($_GET['resetkey']==$user['resetkey']){
?>
      <form action="../process/reset-password.php?id=<?php echo($user['id']);?>" method="post">

      <input type="password" name="password1" placeholder="Neues Password">

      <input type="password" name="password2" placeholder="Neues Password wiederholen">

      <input type="Submit" name="submit" value="&Auml;ndern">


      </form>
<?php
    }else{

      echo("<script language='javascript' type='text/javascript'>
        alert('Dein Key ist falsch, bitte versuche erneut dein Passwort zurückzusetzten.');
        window.history.back();
        </script>");

    }
  }
  else{

    echo("<script language='javascript' type='text/javascript'>
      alert('Diesen Key gibt es leider nicht.');
      window.history.back();
      </script>");

  }
}
