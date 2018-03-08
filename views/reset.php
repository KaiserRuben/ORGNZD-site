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
    //Hier fehlt noch der Code um ein neues Passwort zu setzten
  }
}
