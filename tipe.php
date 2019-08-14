<?php
$nim = "343342141";
$nama = 'Rizky Herdiansyah';
$umur =16;
$nilai = 82.5;
$status = TRUE;

echo "NIM : ". $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai :%.1f<br>",$nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
    ?>