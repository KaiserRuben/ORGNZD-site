<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

echo 'Hallo User '.$userid;

?>

<div class="content">

<h1>ORGNZD</h1>

<h3>Startseite</h3>

Hier werden alle Projekte engezeigt werden.
Mit den geteilten Projekten, und dem menü für einstellungen usw.

</div>

<?php

include('../parts/bottom.php')

?>