<?php
if (session_id() == "")
  session_start();
require_once("rqt_whoami.php");
  if(whoami() == "")
    header('Location: index.php');
  else
  {
    require_once("bdd.php");
    $users = mysqli_query($bdd, "SELECT * FROM users WHERE login ='".$_SESSION["log_status"]."'");
    $user = mysqli_fetch_array($users);
    if ($user["level"] != "admin")
      header('Location: index.php');
  }

  $submit = $_POST["submit"];
  $submit_del = $_POST["submit_del"];
  $name = $_POST["name"];
  $img = $_POST["img"];
  $prix = $_POST["prix"];
  $categorie = $_POST["categorie"];
  $description = $_POST["description"];
  $errors = array();

  if ($submit == "OK")
  {

    if ($name == "")
      array_push($errors, "Veuillez mettre un nom d'article");
    if ($img == "")
      array_push($errors, "Veuillez mettre une url d'image");
    if ($prix == "")
      array_push($errors, "Veuillez mettre un prix");
    if ($categorie == "")
      array_push($errors, "Veuillez mettre une categorie");
    if ($description == "")
      array_push($errors, "Veuillez mettre une description");

      if (!$errors)
      {
        mysqli_query($bdd, "INSERT INTO articles (name, img, description, categorie, prix) VALUES ('".$name."', '".$img."', '".$description."', '".$categorie."', '".$prix."')");
        print_r($_POST);
      }
  }
  else if($submit_del == "OK")
  {

    if ($name == "")
      array_push($errors, "Veuillez mettre un nom d'article");

      if (!$name)
      {
        $query = "DELETE INTO articles WHERE name = '".$name."'";
        mysqli_query($bdd, $query);
      }
  }
  require_once("admin.php");
?>
