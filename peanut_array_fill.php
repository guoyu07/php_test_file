<?php
$a = array_fill(5, 6, "WenJun");
print_r($a);
echo "\r\n----------------------------\r\n";
$a = peanut_array_fill(5, 6, "WernJun");
print_r($a);
echo "\r\n----------------------------\r\n";
$b = array_fill(-2, 0, $a);
print_r($b);
echo "\r\n----------------------------\r\n";
$b = peanut_array_fill(-2, 0, $a);

print_r($b);
