<?php
  require_once("includes/header.php");
  $articles = mysqli_query($bdd, "SELECT * FROM articles WHERE categorie = 'chaussures'");
?>

   <?php while ($article = mysqli_fetch_array($articles)) { ?>
    <div class="article">
      <div class="article-img">
        <img src=" <?php echo $article["img"] ?>" title="">
      </div>
      <div class="article-text">
        <p style=" margin: 0; margin-left: 90px;"><?php echo $article["description"] ?></p>
        <p style=" margin: 0; margin-left: 115px;"><?php echo $article["prix"] ?>&nbsp€</p>
        <a style="text-decoration:none; margin-left: 70px;" href="add_article.php">Ajouter au panier</a>
      </div>
    </div>
    <?php } ?>
<?php
  require_once("includes/footer.php");
?>
