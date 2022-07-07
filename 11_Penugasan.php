<?php
 /*Operator penugasan 
 $a+=$b sama dengan $a=$a+b
 $a-=$b sama dengan $a=$a-b
 $a*=$b sama dengan $a=$a*b
 $a/=$b sama dengan $a=$a/b
 $a%=$b sama dengan $a=$a%b
 */
$hasil =0;

$ayam = 9000;
$minyak = 10000;
$kopi = 3000;

$hasil =$hasil+$ayam;
$hasil +=$minyak;
$hasil +=$kopi ;

var_dump($hasil);

?>