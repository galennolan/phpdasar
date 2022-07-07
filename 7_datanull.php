<?php
//Nilai null adalah sebuah variabel tanpa nilai
 /* untuk membuat data null, bisa menggunakan kata
 kunci null
 */

 $name= "galih";
 $name= null;

 $ApkahNull = is_null($name);
 var_dump($ApkahNull);

/* Menghapus Variabel
Selain mengubah menjadi null, 
kita juga bisa menghapus variabeldengan
function unsert($variabel)
*/

$value="Galih";
unset ($value);//menghapus variabel dan tidak bisa diakses lagi


var_dump(isset($value));

$value="joni";
var_dump(isset($value));
echo $value;
?>