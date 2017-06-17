#!/usr/bin/php
<?php

function ft_split($str, $sep)
{
	$tab = explode($sep, $str);
	return ($tab);
}

if ($argc < 3)
	return ;

$i = $argc - 1;
$key = $argv[1];
$tab = array();
while ($i > 1)
{
	$tab = explode(":", $argv[$i]);
	if ($tab[0] == $key)
	{
		if ($tab[1])
		{
			echo $tab[1]."\n";
			return ;
		}
	}
	$i--;
}

?>
