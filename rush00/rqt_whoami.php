<?php
if (session_id() == "")
  session_start();
function whoami()
{
  if ($_SESSION["log_status"] != "")
    return $_SESSION["log_status"];
  else
    return "";
}
 ?>
