<?php
 /* Versi pendek dalam sebuah percabangan 
 */

$nilai = 80;
  if ($nilainilai =90){
    echo "nilai mu bagus amat". PHP_EOL;
  }
  else{
    echo "nilaimu jelek bro". PHP_EOL;
  }

$komentemen=$nilai=="90"? "nilai mu bagus amat" 
        :($nilai>="80"? "nilai mu sedeng bro"            
        : "nilaimu jelek bro");
        echo "$komentemen";
?>