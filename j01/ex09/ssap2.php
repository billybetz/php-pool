#!/usr/bin/php
<?php

function ft_cmp($str1, $str2)
{
	$nb1;
	$nb2;
	$i = 0;
	while ($str1[$i] && $str2[$i])
	{
		$nb1 = ord($str1[$i]);
		$nb2 = ord($str2[$i]);
		if (65 <= $nb1 && $nb1 <= 90)
			$nb1 += 32;
		else if (97 <= $nb1 && $nb1 <= 122)
			;
		else if (48 <= $nb1 && $nb1 <= 57)
			$nb1 += 200;
		else
			$nb1 += 400;
		if (65 <= $nb2 && $nb2 <= 90)
			$nb2 += 32;
		else if (97 <= $nb2 && $nb2 <= 122)
			;
		else if (48 <= $nb2 && $nb2 <= 57)
			$nb2 += 200;
		else
			$nb2 += 400;
		if ($nb2 > $nb1)
			return (-1);
		else if ($nb1 > $nb2)
			return (1);
		$i++;
	}
	if (!$str1[$i] && !$str[$i])
		return (0);
	if (!$str1[$i] && $str[$i])
		return (1);
	if ($str1[$i] && !$str[$i])
		return (-1);
}

function ft_split($str)
{
	$tab = explode(' ', "$str");
	usort($tab, "ft_cmp");
	foreach($tab as $nb => $s)
	{
		if ($s == NULL)
			array_shift($tab);
	}
	return ($tab);
}

$nb = 1;
$tab = array();
$tab2 = array();
if ($argc != 1)
{
	while ($nb < $argc)
	{
		$tab2 = ft_split($argv[$nb]);
		$tab = array_merge($tab, $tab2);
		$nb++;
	}
	usort($tab, "ft_cmp");
	foreach($tab as $a)
	{
		echo $a."\n";
	}
}

?>
