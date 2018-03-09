<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

?>

<div class="content">

<a href="start.php">Zurück</a>

<h1>New Project</h1>



<form action="../process/newproject-save.php" method="post">

  <input type="name" maxlength="150" name="name" placeholder="Project Name">

  <input type="type" maxlength="50" name="type" placeholder="Project Type (Party, Wedding, Journey)">

  <input type="textfield" maxlength="500" name="description" placeholder="Füge eine griffige Beschreibung hinzu!">

  <input type="date" maxlength="50" name="duedate" placeholder="Duedate">

  <input type="Submit" name="submit" value="Create Project">


</form>

neues project anlegen

</div>

<?php

include('../parts/bottom.php')

?>