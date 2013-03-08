<?php
$arr = array(
	'a' => array('a'=>array('a')),
	'b' => array('b'=>array('b')),
	'c' => array('c'=>array('c'))
);
var_dump($arr);
//unset($arr['a']['a']);
$arr['a']['a'] = NULL;
var_dump($arr);
