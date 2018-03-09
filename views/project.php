<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

$projectid = $_GET['id'];

AllowedForProject($userid, $projectid);

// Darf der User sich diese ProjectID angucken?!

?>

<div class="content">

<a href="start.php">Zurück</a>

<h1><?php echo ProjectName($projectid); ?></h1>

<a href="newlist.php?pid=<?php echo $projectid; ?>">New TODO list</a>

<?php

$sql = "SELECT * FROM lists WHERE projectid = '{$projectid}'";
    foreach ($pdo->query($sql) as $row)
        {
        ?>

        <a href="list.php?id=<?php echo $row['id']; ?>"> <div class="project">

        	<h2><?php echo $row['name']; ?> - <?php echo $row['duedate']; ?></h2>

        </div> </a>

        <?php
        }

?>




<a href="project-settings.php">Project Settings</a>


</div>

<?php

include('../parts/bottom.php')

?>