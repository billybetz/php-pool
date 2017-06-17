#!/usr/bin/php
<?php

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return ;
}

$nb1 = trim($argv[1]);
$operand = trim($argv[2]);
$nb2 = trim($argv[3]);

if ($operand == "+")
	echo $nb1 + $nb2."\n";
else if ($operand == "-")
	echo $nb1 - $nb2."\n";
else if ($operand == "/")
	echo $nb1 / $nb2."\n";
else if ($operand == "*")
	echo $nb1 * $nb2."\n";
else if ($operand == "%")
	echo $nb1 % $nb2."\n";

?>
