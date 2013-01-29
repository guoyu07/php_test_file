<?php
$a = "wenjun1055@gmail.com";
$arr = array();
$pre = 0;
for ($i = 0; $i < strlen($a); $i++)
{
	$arr[$i] = ord($a[$i]) - $pre;
	$pre = ord($a[$i]);
}
//print_r($arr);
$k = "";
$count = count($arr);
for ($i = 0; $i < $count; $i++)
{
	$k = $k . $arr[$i] . ".";
}
echo "\r\n".$k."\r\n";
$k = rtrim($k, ".");
echo "\r\n".$k."\r\n";

?>