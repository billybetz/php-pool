#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
	$tab2 = $tab;
	sort($tab2);
	if ($tab2 == $tab)
		return (TRUE);
	else
		return (FALSE);
}

?>
