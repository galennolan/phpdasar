<?php
 /* https://rifqiazam.medium.com/memahami-lebih-dalam-ternary-dan-null-coalescing-operator-pada-php-7-ffa86340e4b7
  Operator ?? dikenal juga dengan Null Coalescing. 
  Operator ini akan mereturn value disebelah kiri jika tidak bernilai null, 
  jika null maka mereturn sebelah kanan.
 */
  $nilai= null;
  
  $num = $nilai ?? 75;
  echo $num . PHP_EOL; //output: 75

  $data= ["action"=>"ada kok"];
  
  if(isset($data["action"])){
    $action = $data['action'];
  }else {
    $action= "nothing" ;
  }

  echo $action . PHP_EOL;

  $action = $data["action"]?? "nothing";
  echo $action . PHP_EOL;

?>