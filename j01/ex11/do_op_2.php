#!/usr/bin/php
<?php

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return ;
}

$neg1 = 0;
$neg2 = 0;
$nb1 = 0;
$operand;
$nb2 = 0;
$i;

$str = trim($argv[1]);
if ($str[$i] == "-" || $str[$i] == "+")
{
	if ($str[$i] == "-")
		$neg1 = 1;
	$i++;
}
while($str[$i] && $str[$i] == " ")
	$i++;
if (!is_numeric($str[$i]))
{
	echo "Syntax Error\n";
	return ;
}
while ($str[$i] && is_numeric($str[$i]))
{
	$nb1 = $nb1 * 10 + $str[$i];
	$i++;
}
while($str[$i] && $str[$i] == " ")
	$i++;
if (!$str[$i] || $str[$i] != "+" && $str[$i] != "-" && $str[$i] != "*" && $str[$i] != "/" && $str[$i] != "%")
{
	echo "Syntax Error\n";
	return ;
}
$operand = $str[$i];
$i++;
while($str[$i] && $str[$i] == " ")
	$i++;
if ($str[$i] == "-" || $str[$i] == "+")
{
	if ($str[$i] == "-")
		$neg2 = 1;
	$i++;
}
while($str[$i] && $str[$i] == " ")
	$i++;
if (!$str[$i] || !is_numeric($str[$i]))
{
	echo "Syntax Error\n";
	return ;
}
while ($str[$i] && is_numeric($str[$i]))
{
	$nb2 = $nb2 * 10 + $str[$i];
	$i++;
}
if ($str[$i])
{
	echo "Syntax Error\n";
	return ;
}

if ($neg1 == 1)
	$nb1 = -$nb1;
if ($neg2 == 1)
	$nb2 = -$nb2;

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
