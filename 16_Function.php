<?php
 /*Expression merupakan bagian terpenting dalam php
   Expression adalah apapun yang memiliki value

 */

$a=10; //contoh expression
$b=++$a;

function myTest() 
   {
   //global $x;
   // using x inside this function will generate an error
   echo "Variable x inside function is: " . $GLOBALS['a'] . PHP_EOL;
   } //diawali { dan diakhiri} adalah blok 

   myTest();
?>