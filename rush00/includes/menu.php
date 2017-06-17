<?php session_start(); require_once("rqt_whoami.php");?>
<div class="top">
  <?php if (($name = whoami()) == "") {?>
    <h3><a href="inscription.php">S'enregistrer</a></h3>
    <h3 style="margin-right: 10px; border-right: 1px solid grey;"><a href="connexion.php">Connexion</a></h3><br />
  <?php } else {?>
    <h3><a href="deconnexion_rqt.php">Déconnexion</a></h3>
    <h3><?php echo "Bonjour $name";?></h3>
    <?php } ?>

</div>

<nav>
  <div class="menu_acceuil"><a href=".">Clothing Market</a></div>
  <div class="cate" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;"><a href="t_shirt.php">T-Shirt</a></div>
  <div class="cate"><a href="pull.php">Pull</a></div>
  <div class="cate"><a href="chaussures.php">Chaussures</a></div>
  <div class="cate"><a href="cravates.php">Cravates</a></div>
  <div class="cate"><a href="chapeaux.php">Chapeaux</a></div>
  <div class="vertical-line"> </div>
  <div class="panier">
    <div class="panier-text">
      Voir le panier
    </div>
    <div class="panier-div">
      <a href="panier.php"> <img class="panier-img" src="http://previews.123rf.com/images/ladyann/ladyann1112/ladyann111200021/11666546-mis-en-illustration-de-concept-commercial-avec-panier-d-achat-et-jaune-liste-des-notes-du-papier-Banque-d'images.jpg" alt="panier" title="panier" /></a>
    </div>

</nav>
