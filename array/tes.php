<?php

$aso = [

   [
       'Judul' =>  '<h2>Belajar PHP & MySQL untuk Pemula</h2>',
       'Penulis' => 'Admin SMK',
   ],
   [
       'Judul' => '<h2>Tutorial PHP dari Nol hingga Mahir</h2>',
       'Penulis' => 'Admin SMK',
   ],
   [   

       'Judul' => '<h2>Membuat Aplikasi Web dengan PHP</h2>',
       'Penulis'=> 'SMK ASSALAAM,'
   ]
]; 

 foreach ($aso as $key => $value) {
    echo $key . $value ["Judul"] . "<br>";
    echo $value ["Penulis"] . "<br>";
    echo "<hr>";
 }
?>