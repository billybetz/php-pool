<?php
  $ok = FALSE;
  $login = $_POST["login"];
  $oldpw = $_POST["oldpw"];
  $newpw = $_POST["newpw"];
  $submit = $_POST["submit"];
  if (!$login || $login == "" || !$oldpw || $oldpw == "" || !$newpw || $newpw == "" || $submit != "OK")
  {
    echo "ERROR\n";
    return ;
  }
  else
  {
      if (file_exists("../../private/passwd"))
      {
          $tab = unserialize(file_get_contents("../../private/passwd"));
          foreach ($tab as &$sub)
          {
            if ($sub["login"] == $login && $sub["passwd"] == hash("whirlpool", $oldpw))
            {
              $sub["passwd"] = hash("whirlpool", $newpw);
              file_put_contents("../../private/passwd", serialize($tab));
              echo "OK\n";
              return ;
            }
          }
        }
      echo "ERROR\n";
      return ;
  }
 ?>
