<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

?>

<div class="content">

<h1>Settings</h1>

<a href="start.php">Zurück</a>

Formular zum ändern aller Einstellungen des Users. Das Formular wird von ../process/settings-update.php empfangen

<a href="../process/logout.php">Logout</a>

</div>

<?php

include('../parts/bottom.php')

?>