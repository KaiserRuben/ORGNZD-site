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
    //Hier fehlt noch der Code um ein neues Passwort zu setzten
  }
}
>>>>>>> 6ae33a250dc55fd7a3c629f3621ebe9e772f843b
