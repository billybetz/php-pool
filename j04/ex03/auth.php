<?php
  function auth($login, $passwd)
  {
    if (!file_exists("../../private"))
    {
      echo "ERROR\n";
      return ;
    }
    $tab = unserialize(file_get_contents("../../private/passwd"));
      foreach ($tab as $sub)
      {
        if ($sub["login"] == $login)
        {
            if ($sub["passwd"] == hash("whirlpool", $passwd))
              return TRUE;
            else
              return FALSE;
        }
      }
      return FALSE;
    }
  ?>
