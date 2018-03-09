<?php

include('../functions.php');


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

?>
