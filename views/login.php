<?php

include('../functions.php');


include('../parts/top.php');

?>

  <div class="content">
    <h1>ORGNZD</h1>

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