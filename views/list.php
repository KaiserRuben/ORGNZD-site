<?php

include('../functions.php');

include('../parts/top.php');

auth();



$userid = $_SESSION['id'];

$listid = $_GET['id'];


$projectid = ListGetProjectID($listid);

// Darf der User sich diese ProjectID angucken?!

?>

<div class="content">

<a href="project.php?id=<?php echo $projectid; ?>">Zurück</a>

<h1> <?php echo ListGetName($listid); ?> - <?php echo ProjectName($projectid); ?></h1>

Beschreibung:

Value:

<?php


?>




<a href="project-settings.php">Project Settings</a>


</div>

<?php

include('../parts/bottom.php')

?>