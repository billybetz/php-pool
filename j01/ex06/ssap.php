#!/usr/bin/php
<?php

function ft_split($str)
{
	$tab = explode(' ', "$str");
	sort($tab);
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
	sort($tab);
	foreach($tab as $a)
	{
		echo $a."\n";
	}
}

?>
