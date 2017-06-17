<?php
function check_auth($login, $passwd)
  {
    include("bdd.php");
    $query = "SELECT * FROM users WHERE login = '".$login."'";
    $users = mysqli_query($bdd, $query);
    $user = mysqli_fetch_array($users);
    if(!$user)
      return FALSE;
    if ($user["passwd"] == $passwd)
      return TRUE;
    else
      FALSE;
    }
?>
