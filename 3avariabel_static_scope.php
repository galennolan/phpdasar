<?php
function TestStatic() {
  static $x = 0;
  echo $x;
  $x++;
}

TestStatic();
echo PHP_EOL;
TestStatic();
echo PHP_EOL;
TestStatic();
echo PHP_EOL;
?> 