<?php
 /* Array adalah tipe data yg berisi kosong atau byk data
 Array bisa berisikan tipe data yg beda2
 panjang dinamis
 */
$nilai = array(1,2,3,4);
var_dump($nilai);

$nama =['Galih', 'Setiawan','Nurohim'];
var_dump($nama);

var_dump($nama[2]);//akses data pada index ke 2

$nama[0]="Joko";

$nama[]="Nurochim";//Menambah data array paling terakhir
var_dump($nama);

unset($nama[0]);
var_dump(count($nama));//Menghitung data array 

?>