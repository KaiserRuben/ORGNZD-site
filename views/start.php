<?php

include('../functions.php');

include('../parts/top.php');

auth(0);

$userid = $_SESSION['id'];

?>

<div class="content">

<h1>Projects (<?php echo countProjects($userid); ?>)</h1>

<a href="newproject.php">New Project</a>

<?php

$sql = "SELECT * FROM projects WHERE userid = '{$userid}'";
    foreach ($pdo->query($sql) as $row)
        {
        ?>

        <a href="project.php?id=<?php echo $row['id']; ?>"> <div class="project">

        	<h2><?php echo $row['name']; ?> - <?php echo $row['type']; ?> - <?php echo $row['duedate']; ?></h2>

        </div> </a>

        <?php
        }

?>




<a href="settings.php">Settings</a>


</div>

<?php

include('../parts/bottom.php')

?>
