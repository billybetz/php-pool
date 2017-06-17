<?php
if (session_id() == "")
  session_start();
require_once("rqt_whoami.php");
  if(whoami() != "")
    header('Location: index.php');
  require_once("includes/header.php");
  require_once("rqt_check_auth.php");
  $login = $_POST["login"];
  $passwd = $_POST["passwd"];
  $submit = $_POST["submit"];
  $errors = array();
if ($submit == "OK")
{
    if ($login == "")
      array_push($errors, "Veuillez entrer votre login");
    if ($passwd == "")
      array_push($errors, "Veuillez entrer votre mot de passe");

    if (!$errors && check_auth($login, $passwd) == TRUE)
    {
      $_SESSION["log_status"] = $login;
      require_once("index.php");
    }
    else
    {
      $_SESSION["log_status"] = "";
      if (!$errors)
        array_push($errors, "identifiant ou mot de passe incorrect");
    }
}
  ?>

<?php
?>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="">
      <input type="text" id="username" name="login" placeholder="username"/>
      <input type="password" id="password" name="passwd" placeholder="password"/>
      <button type="submit" name="submit" value="OK">Connexion</button>
      <?php foreach($errors as $message)
      {   ?>
        <p><?php echo "$message"."\n"; ?></p>
      <?php  } ?>
      <p class="message">Pas encore de compte ?<a href="inscription.php">&nbspS'enregistrer</a></p>
    </form>
  </div>
</div>
<?php require_once("includes/footer.php"); ?>
