<?php

include('../functions.php');


include('../parts/top.php');

?>

<div class="content">

<h1>ORGNZD</h1>

<h3>Register</h3>


<form action="../process/register-adduser.php" method="post">

  <input type="text" maxlength="50" name="name" placeholder="name">

  <input type="email" maxlength="200" name="email" placeholder="email">

  <input type="password" maxlength="100" name="password" placeholder="password">

  <input type="Submit" name="submit" value="Login">


</form>




</div>

<?php

include('../parts/bottom.php');

?>
