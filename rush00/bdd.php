<?php
global $bdd;
$bdd = mysqli_connect("localhost", "s", "s", "rush00");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
