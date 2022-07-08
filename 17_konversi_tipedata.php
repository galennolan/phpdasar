<?php
 /*konversi tipe data dari string ke integer maupun sebaliknya
 */

  $nilaistring = (string)100;
  var_dump($nilaistring);

  $nilaiInt = (int)"100";
  var_dump($nilaiInt);

  //akses array dari string
  $kata= "Galih";
  var_dump($kata[1]);

  //variabel parsing
  echo "hay $kata, selamat belajar".PHP_EOL;

  //curly brace gabungin string tanpa spasi
  echo "hay {$kata}o, selamat belajar ya";
?>