<?php
class A 
{
  public static function staticFunc() {
    echo "static\r\n";
  }

  public function instanceFunc() {
    echo "instance\r\n";
  }
}

A::instanceFunc();
$a = new A();
$a->staticFunc();
