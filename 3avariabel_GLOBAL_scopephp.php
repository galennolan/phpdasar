<?php
$x = 5; // global scope

function myTest() {
    //global $x;
  // using x inside this function will generate an error
  echo "Variable x inside function is: " . $GLOBALS['x'] . PHP_EOL;
}
myTest();

echo "Variable x outside function is: " . $x;
?>