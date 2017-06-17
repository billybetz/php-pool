<?php
  $login = $_POST["login"];
  $passwd = $_POST["passwd"];
  $submit = $_POST["submit"];
  if (!$login || $login == "" || !$passwd || $passwd == "" || $submit != "OK")
  {
    echo "ERROR\n";
    return ;
  }
  else
  {
      if (!file_exists("../../private"))
        mkdir("../../private");
      if (file_exists("../../private/passwd"))
      {
        $tab = unserialize(file_get_contents("../../private/passwd"));
        foreach ($tab as $sub)
        {
          if ($sub["login"] == $login)
          {
            echo "ERROR\n";
            return ;
          }
        }
      }
      $sub_tab['login'] = $login;
      $sub_tab["passwd"] = hash("whirlpool", $passwd);
      $tab[] = $sub_tab;
      file_put_contents("../../private/passwd", serialize($tab));
      echo "OK\n";
      return ;
  }

 ?>
