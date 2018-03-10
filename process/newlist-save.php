<?php

include('../functions.php');

auth();

if(isset($_POST['projectid'], $_POST['name'], $_POST['description'], $_POST['value'], $_POST['duedate'])
	&& $_POST['projectid'] !== '' && $_POST['name'] !== '' && $_POST['description'] !== '' && $_POST['duedate'] !== ''
	){

	//echo $_POST['projectid'].$_POST['name']. $_POST['description']. $_POST['value']. $_POST['duedate'];

	addList($_POST['projectid'], $_POST['name'], $_POST['description'], $_POST['value'], $_POST['duedate']);

}else{
	header('location:../views/newlist.php?pid='.$_POST['projectid'].'&alert=error');
}


?>