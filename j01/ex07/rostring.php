#!/usr/bin/php
<?php

function epur_str($str)
{
	$str = trim($str);
	while ($str != str_replace("  ", " ", $str))
	{
		$str = str_replace("  ", " ", $str);
	}
	return ($str);
}

function ft_count($str)
{
	$i = 0;
	$nb = 0;

	while ($str[$i])
	{
		while ($str[$i] && $str[$i] == " ")
			$i++;
		if ($str[$i])
			$nb++;
		while ($str[$i] && $str[$i] != " ")
			$i++;
	}
	return ($nb);
}

function ft_split($str)
{
	$tab = explode(' ', "$str");
	return ($tab);
}

if ($argc == 1)
	return ;
$tab = array();
$str = epur_str($argv[1]);
$tab = ft_split($str);
$nb = ft_count($str);
if ($nb == 0)
	return ;
else if ($nb == 1)
	echo $tab[0]."\n";
else if ($nb == 2)
	echo $tab[1]." ".$tab[0]."\n";
else
{
	$i = 1;
	while ($i< $nb)
	{
		echo $tab[$i]." ";
		$i++;
	}
	echo $tab[0]."\n";
}

?>
