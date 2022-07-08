<?php
 /*Percabangan
 */

  $nilai =60;
  $absen =60;

    if($nilai >= 75 && $absen >= 75){
      echo "nilai anda luar biasa bagus". PHP_EOL;
    } else if($nilai>=60 && $absen >= 60){
      echo "Nilai anda cukup". PHP_EOL;
    } else {
      echo "Nilai anda buruk";
    }

  
?>