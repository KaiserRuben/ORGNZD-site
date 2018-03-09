<?php
if($_POST['password1'] == $_POST['password2'] && isset($_POST['password'])){  //Prüfen, ob die Passörter übereinstimmen

  $newPw = $_POST['password1'];
  $userId = $_GET['id'];
  changePassword($newPw, $userId);

}
else{ //Wenn die Passwörter nicht übereinstimmen wird nnochmal zurücknavigiert

  echo("<script language='javascript' type='text/javascript'>
    alert('Passworter stimmen nicht überein.');
    window.history.back();
    </script>");

}
?>
