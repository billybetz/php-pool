#!/usr/bin/php
<?php

if ($argc != 2)
	return ;

$str = trim($argv[1]);
if ($str == "")
	return ;
while ($str != str_replace("  ", " ", $str))
{
	$str = str_replace("  ", " ", $str);
}
echo $str."\n";

?>
