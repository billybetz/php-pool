<?php
if (session_id() == "")
  session_start();
require_once("rqt_whoami.php");
if(whoami() != "")
  header('Location: index.php');
require_once("includes/header.php");
$login = $_POST["login"];
$passwd = $_POST["passwd"];
$email = $_POST["email"];
$submit = $_POST["submit"];
$errors = array();
if ($submit == "OK")
{

      if ($login == "")
        array_push($errors, "Veuillez mettre un login");
      if ($passwd == "")
        array_push($errors, "Veuillez mettre un mot de passe");
      if ($email == "")
        array_push($errors, "Veuillez mettre un email");

      $users = mysqli_query($bdd, "SELECT * FROM users WHERE login ='".$login."'");
      $user = mysqli_fetch_array($users);
        if($user && !$errors)
          array_push($errors, "Login déjà utilisé");
      $mails = mysqli_query($bdd, "SELECT * FROM users WHERE email ='".$email."'");
      $mail = mysqli_fetch_array($users);
        if ($mail && !$errors)
          array_push($errors, "Email déjà utilisé");
      if (!$errors)
      {
        $query = "INSERT INTO users (login, passwd, email, level) VALUES ('".$login."', '".$passwd."', '".$email."', '".$level."')";
        mysqli_query($bdd, $query);
      }
}
?>

<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="">
        <input type="text" id="username" name="login" placeholder="Username.." />
        <input type="password" id="password" name="passwd"  placeholder="Password.."/>
        <input type="text" id="email" name="email" placeholder="Email.."/>
      <button type="submit" name="submit" value="OK">S'enregistrer</button>
      <?php foreach($errors as $message)
      {   ?>
        <p><?php echo "$message"."\n"; ?></p>
      <?php  } ?>
      <p class="message">Déjà un compte ?<a href="inscription.php">&nbspConnexion</a></p>
    </form>
  </div>
</div>
<?php require_once("includes/footer.php"); ?>
