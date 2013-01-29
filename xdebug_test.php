<?php
$a = array(1,2,3,"a"=>3);
$b = peanut_array_change_key_case($a);
xdebug_debug_zval('b');
