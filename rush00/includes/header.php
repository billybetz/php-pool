<?php
if (session_id() == "")
  session_start(); ?>
<?php require_once("bdd.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login-register.css">
    <title>Clothing-Market</title>
    <link rel="icon" type="image/x-icon" href="http://www.coreymock.com/wp-content/uploads/cropped-cm_favicon.png">
  </head>
  <body>
    <?php require_once("menu.php"); ?>
    <div class="mid">
