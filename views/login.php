<?php

include('../functions.php');

include('../parts/top.php');

?>

<div class="content">

<h1>ORGNZD</h1>

<h3>Login</h3>


<form action="../process/login-check.php" method="post">

<input type="text" name="username">

<input type="password" name="password">

<input type="Submit" name="submit" value="Login">


</form>




</div>

<?php

include('../parts/bottom.php')

?>