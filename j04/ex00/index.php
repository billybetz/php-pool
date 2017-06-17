<?php
session_start();
if ($_GET["login"] && $_GET["passwd"] && $_GET["submit"])
{
	if($_GET["submit"] == "OK")
	{
		$_SESSION["login"] = $_GET["login"];
		$_SESSION["passwd"] = $_GET["passwd"];
		$_SESSION["submit"] = $_GET["submit"];
	}
}
?>

<html>
	<head>

	<head>
	<body>
		<form method="get">
			<label>Identifiant :</label>
			<input type="text" name="login"/ value="<?php echo $_SESSION["login"];?>"><br />
			<label>Mot de passe :</label>
			<input type="text" name="passwd" value="<?php echo $_SESSION["passwd"];?>"><br />
			<input href="." type="submit" name="submit" value="OK"><br />
		</form>
	</body>
</html>
