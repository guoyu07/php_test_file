<?php
$a = array(1,2,3,4,1,2,3,4,"as","cs","cs","bs","as",array());

print_r(array_count_values($a));
echo "\r\n-------------------------------------\r\n";
print_r(peanut_array_count_values($a));
