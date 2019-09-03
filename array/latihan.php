<?php

$array = array('saya <br>' , 10);
$aso = [

   [
       'Judul : ' =>  'Belajar PHP & MySQL untuk Pemula',
       'Penulis : ' => 'Admin SMK' 
   ],
   [
       'Judul :' => 'Tutorial PHP dari Nol hingga Mahir',
       'Penulis :' => 'Admin SMK',
   ],
   [   

       'Judul :' => 'Membuat Aplikasi Web dengan PHP',
       'Penulis :' => 'SMK ASSALAAM'
   ]
]; 

 foreach ($aso as $value) {
    echo $value["Judul"] . "<br>";
    echo $value["Penulis"] . "<br>";
    echo "<hr>";
 }
?>