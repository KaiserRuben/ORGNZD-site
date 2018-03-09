<?php
<<<<<<< HEAD

include('../functions.php');

=======
if(!isset($_GET['usrId'])){?>
<div class="content">

<h1>ORGNZD</h1>

<h3>Passwort vergessen</h3>

Email von deinem Account hier reintragen. Wir schicken Dir dann eine Email mit dem Link zum Zurücksetzen des Passwortes.
>>>>>>> 6ae33a250dc55fd7a3c629f3621ebe9e772f843b

include('../parts/top.php');

?>

<div class="content">
  <h1 id="orgnzd-register-title">ORGNZD</h1>
  <h3 id="register-title">Passwort vergessen</h3>

  <p>Email von deinem Account hier reintragen. Wir schicken Dir dann eine Email mit dem Link zum Zurücksetzen des Passwortes.</p>

    <form action="../process/reset-check.php" method="post" id="reset-form">
      <input type="email" name="email" placeholder="Email">
      <input type="Submit" name="submit" value="Abschicken" id="reset-submit">
    </form>

</div>

<?php

include('../parts/bottom.php')

<<<<<<< HEAD
?>
=======
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
>>>>>>> 6ae33a250dc55fd7a3c629f3621ebe9e772f843b
