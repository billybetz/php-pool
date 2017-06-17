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
  require_once("includes/header.php");
  ?>
  <form class="form" method="POST" action="">
 		<input type="text" id="username" name="login" placeholder="username"/>
 		<button type="submit" name="submit" value="OK">Rendre administrateur</button>
 		<button type="submit" name="submit-del" value="OK" style="border-top: 1px solid black;">Supprimer utilisateur</button>
	</form>
	<form class="form" method="POST" action="admin_article_gestion.php">
 		<input type="text" id="name" name="name" placeholder="article"/>
 		<input type="text" id="img" name="img" placeholder="url"/>
    <input type="text" id="description" name="description" placeholder="description"/>
 		<input type="text" id="prix" name="prix" placeholder="prix"/>
 		<input type="text" id="categorie" name="categorie" placeholder="categorie"/>
 		<button type="submit" name="submit" value="OK">Ajouter un article</button>
 		<button type="submit" name="submit-del" value="OK" style="border-top: 1px solid black;">Supprimer un article</button>
 </form>

 <?php require_once("includes/footer.php");?>
