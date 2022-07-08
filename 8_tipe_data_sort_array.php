<?php
 /* mengurutkan tipe data array
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key

 */

$nama =['Galih', 'Setiawan','Nurohim','Zakya','David'];
rsort($nama);
var_dump($nama);


$nama =['Galih', 'Setiawan','Nurohim','Zakya','David'];
rsort($nama);
var_dump($nama);

$nama =['Galih', 'Setiawan','Nurohim','Zakya','David'];
ksort($nama);
var_dump($nama);

?>