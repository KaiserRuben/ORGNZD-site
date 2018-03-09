<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

echo 'Hallo User '.userName($userid);

?>

<div class="content">

<h1>ORGNZD</h1>

<h3>Startseite</h3>

Hier werden alle Projekte engezeigt werden.
Mit den geteilten Projekten, und dem menü für einstellungen usw.

Hier wird man die Möglichkeite haben ein neues Projekt zu erstellen

</div>

<?php

include('../parts/bottom.php')

?>
