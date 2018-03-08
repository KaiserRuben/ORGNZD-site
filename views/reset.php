<?php

include('../functions.php');

include('../parts/top.php');

?>

<div class="content">

<h1>ORGNZD</h1>

<h3>Reset Password</h3>


<form action="../process/reset-check.php" method="post">

<input type="email" name="email">


<input type="Submit" name="submit" value="Email Senden">


</form>




</div>

<?php

include('../parts/bottom.php')

?>