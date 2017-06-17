<?php
  session_start();
  $_SESSION["loggued_on_user"] = "";
  session_destroy();
  require_once("index.php");
?>
