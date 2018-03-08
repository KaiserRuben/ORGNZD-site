<?php

// Database



// functions


function login($email, $password)
{
  $sql = "SELECT password FROM user WHERE id={$email}";
  $pdo->query($sql) as $row;
  if($row['password'] = $password){
    //Hier fehlt noch die Session
    print('Hat geklappt');
    return 1;
  }
  else{
    return 0;
  }
}
