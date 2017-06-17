#!/usr/bin/php
<?php

if ($argc < 2)
	return ;

$str = $argv[1];
$str = trim($str);
$pattern = "/[\t ]/";
$replacement = "";
$str = preg_replace($pattern, $replacement, $str);

echo $str."\n";

?>
