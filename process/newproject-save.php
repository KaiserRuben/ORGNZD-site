<?php

include('../functions.php');

auth();

if(isset($_POST['name'], $_POST['type'], $_POST['description'], $_POST['duedate'])
	&& $_POST['name'] !== '' && $_POST['type'] !== '' && $_POST['description'] !== '' && $_POST['duedate'] !== ''
	){

	

	addProject($_SESSION['id'], $_POST['name'], $_POST['type'], $_POST['description'], $_POST['duedate']);

}else{
	header('location:../views/newproject.php?alert=error');
}


?>