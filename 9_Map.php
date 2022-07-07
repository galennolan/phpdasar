<?php
 /* di php untuk membuat tipe data map (asosiasi key dan value)
 bisa dibuat menggunakan array
 */

 $nama = array(
    "id"=>"glt",
    "nama"=>"galih setiawan",
    'age'=>'18'
 );

 $namas=[
    "id"=>"glt",
    "nama"=>"galih setiawan",
    'age'=>'18'
 ];

 var_dump($nama);
 var_dump($namas);


 /* Array di dalam array */
 $galih = [
    "id"=>"GLT",
    "nama"=>"galih setiawan",
    'alamat'=>[
        'kota'=>'sukoharjo',
        'kecamatan'=>'Bendosari',
    ],
];
var_dump($galih);
?>