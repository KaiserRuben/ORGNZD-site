<?php

include('../functions.php');

include('../parts/top.php');

?>

<div class="content">

<h1>ORGNZD</h1>

<h3>Login</h3>


<form action="../process/login-check.php" method="post">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Passwort">

<input type="Submit" name="submit" value="Login">


</form>

<a href="reset.php">Passwort vergessen</a>

<a href="register.php">Noch keinen Account?</a>


</div>

<?php

include('../parts/bottom.php')

?>