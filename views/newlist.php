<?php

include('../functions.php');

include('../parts/top.php');

auth();

$userid = $_SESSION['id'];

$projectid = $_GET['pid'];

?>

<div class="content">

<h1>New List for "<?php echo ProjectName($projectid); ?>"</h1>



<form action="../process/newlist-save.php" method="post">

  <input type="hidden" maxlength="150" name="projectid" value="<?php echo $projectid; ?>">

  <input type="name" maxlength="150" name="name" placeholder="Listen Name">

  <input type="textfield" maxlength="500" name="description" placeholder="Füge eine griffige Beschreibung hinzu!">

  <input type="textfield" name="value" placeholder="Listenpunkt (mit Komma trennen)">

  <input type="date" maxlength="50" name="duedate" placeholder="Duedate">

  <input type="Submit" name="submit" value="Create List">


</form>

neue Liste anlegen

</div>

<?php

include('../parts/bottom.php')

?>