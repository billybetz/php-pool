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
?>
