#!/usr/bin/php
<?php

if ($argc < 2)
	return ;

$str = $argv[1];
$str = trim($str);
$tab = explode(" ", $str);
$jour = $tab[0];
$date = $tab[1];
$mois = $tab[2];
$annee = $tab[3];
$horaire = explode(":", $tab[4]);
$heures = $horaire[0];
$minutes = $horaire[1];
$secondes = $horaire[2];

if ($mois == "janvier" || $mois == "Janvier")
{
	$m = 1;
	$nb = 32;
}
else if ($mois == "fevrier" || $mois == "Fevrier")
{
	$m = 2;
	$nb = 30;
}
else if ($mois == "mars" || $mois == "Mars")
{
	$m = 3;
	$nb = 32;
}
else if ($mois == "avril" || $mois == "Avril")
{
	$m = 4;
	$nb = 31;
}
else if ($mois == "mai" || $mois == "Mai")
{
	$m = 5;
	$nb = 32;
}
else if ($mois == "juin" || $mois == "Juin")
{
	$m = 6;
	$nb = 31;
}
else if ($mois == "juillet" || $mois == "Juillet")
{
	$m = 7;
	$nb = 32;
}
else if ($mois == "aout" || $mois == "Aout")
{
	$m = 8;
	$nb = 32;
}
else if ($mois == "septembre" || $mois == "Septembre")
{
	$m = 9;
	$nb = 31;
}
else if ($mois == "octobre" || $mois == "Octobre")
{
	$m = 10;
	$nb = 32;
}
else if ($mois == "novembre" || $mois == "Novembre")
{
	$m = 11;
	$nb = 31;
}
else if ($mois == "decembre" || $mois == "Decembre")
{
	$m = 12;
	$nb = 32;
}

if (preg_match("/^[lL]undi|[mM]ardi|[mM]ercredi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche$/", $jour))
{
	if (preg_match("/^([1-3])?[0-9]$/", $date) && $date < $nb)
	{
		if (preg_match("/^[jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]ecembre$/", $mois))
		{
			if ($annee > 1969)
			{
				if ($heures < 24 && strlen($heures) == 2)
				{
					if ($minutes < 60 && strlen($minutes) == 2)
					{
						if ($secondes < 60 && strlen($secondes) == 2)
						{
							echo mktime($heures, $minutes, $secondes, $m, $date, $annee, 1)."\n";
							return ;
						}	
					}
				}	
			}
		}
	}
}
echo ("Wrong Format\n");

?>
