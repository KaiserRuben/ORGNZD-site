<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

?>

<div class="content">

<h1>My Projects</h1>

<a href="newproject.php">New Project</a>

<?php

$sql = "SELECT * FROM projects WHERE userid = '{$userid}'";
    foreach ($pdo->query($sql) as $row)
        {
        ?>

        <a href="project.php?id=<?php echo $row['id']; ?>"> <div class="project">

        	<h2><?php echo $row['name']; ?> - <?php echo $row['duedate']; ?></h2>

        </div> </a>

        <?php
        }

?>




<a href="setting.php">Settings</a>

Hier werden alle Projekte engezeigt werden.
Mit den geteilten Projekten, und dem menü für einstellungen usw.

Hier wird man die Möglichkeite haben ein neues Projekt zu erstellen

</div>

<?php

include('../parts/bottom.php')

?>
