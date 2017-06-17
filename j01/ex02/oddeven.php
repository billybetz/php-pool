#!/usr/bin/php
<?php
while (42)
{
	echo "Entrez un nombre : ";
	$var = fgets(STDIN);
	$var = rtrim($var);
	if(feof(STDIN))
		break;
	if (is_numeric($var) == TRUE)
	{
		if (($var % 2) == 0)
			echo "Le chiffre ".$var." est Pair\n";
		else
			echo "Le chiffre ".$var." est Impair\n";
	}
	else
		echo "'".$var."' n'est pas un chiffre\n";
}
echo "\n";
?>
