<?php
$a = array("a", array(1), "e", 4);
$b = array("a", "b", "c", "d");
print_r(array_combine($a, $b));
echo "\r\n------------------------------------\r\n";
print_r(peanut_array_combine($a, $b));
