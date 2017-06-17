#!/usr/bin/php
<?php

function ft_is_lowalpha($char)
{
	if ($char >= "a" && $char <= "z")
		return TRUE;
	else
		return FALSE;
}

function ft_is_next_word($i, $word, $str)
{
	$y = 0;
	while ($word[$y] && $str[$i] && $str[$i] == $word[$y])
	{
		$i++;
		$y++;
	}
	if ($word[$y])
		return FALSE;
	else
		return TRUE;
}

if ($argc < 2)
	return;
$i = 1;
while ($argc > 1)
{
	$u = 0;
	$str = file_get_contents($argv[$i]);
	while ($str[$u])
	{
		while ($str[$u] && (ft_is_next_word($u, "<a", $str) == FALSE))
			$u++;
		if ($str[$u])
		{
			while ($str[$u] && (ft_is_next_word($u, "</a>", $str) == FALSE))
			{
				$u++;
				if (ft_is_next_word($u, "title=", $str) == TRUE)
				{
					$u += 7;
					while ($str[$u] && $str[$u] != "\"")
					{
						$str[$u] = strtoupper($str[$u]);
						$u++;
					}
					if (!$str[$u])
					{
						echo $argv[$u]." : bad syntax HTML\n";
						return ;
					}
				}
				if ($str[$u] && $str[$u] == ">")
				{
					while ($str[$u] && $str[$u] != "<")
					{
						$str[$u] = strtoupper($str[$u]);
						$u++;
					}
					if (!$str[$u])
					{
						echo $argv[$u]." : bad syntax HTML\n";
						return ;
					}
				}
			}
		}
		else
			break ;
		$u++;
	}
	echo $str;
	$i++;
	$argc--;
}

?>
