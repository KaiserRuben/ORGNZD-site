<?php

include('../functions.php');


include('../parts/top.php');

?>

  <div class="content">
    <h1>ORGNZD</h1>

    <?php

    // Alerts

          $alert = "none";
          if( isset($_GET['alert']) )
          {
              $alert = $_GET['alert'];
          }
          if($alert=="falsepass")
          {
            echo '<div class="alert" role="alert">
                  Falsche E-Mail oder falsches Passwort!
                  </div>';
          }
          if($alert=="reset")
          {
            echo '<div class="alert" role="alert">
                  Falls die E-Mail einem Benutzer zuordbar ist, wurde ein Link zum Zurücksetzen des Passwortes verschickt.
                  </div>';
          }
          if($alert=="newpass")
          {
            echo '<div class="alert" role="alert">
                  Passwort erfolgreich geändert!
                  </div>';
          }
          if($alert=="loginfirst")
          {
            echo '<div class="alert" role="alert">
                  Bitte zuerst Einloggen.
                  </div>';
          }


    ?>

    <form action="../process/login-check.php" method="post">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="Submit" name="submit" value="Login" id="submit">
    </form>

    <div id="link-wrapper">
      <a href="reset.php">Passwort vergessen</a>
      <a href="register.php">Noch keinen Account?</a>
    </div>
  </div>

<?php

include('../parts/bottom.php');

?>