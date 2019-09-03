<?php
$arrNilai = array ("Ajeng" => 90, "Mamat" => 70, "Ucup" => 87,
"Aang" => 95, "Syahrul" => 75);

foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}
    echo "<br>";

    echo "<h4>KETERANGAN</h4> <br>";
    echo "Jika Nilai : <br>";
    echo "Nilai > 85 Grade A<br>";
    echo "Nilai > 75 Grade B<br>";
    echo "Nilai > 65 Grade C<br>";

    echo "<pre>";
    foreach($arrNilai as $nama => $nilai){
        if ($nilai > 85){
            echo "Nama = $nama,Nilai = $nilai,Grade A<hr>";
        }
        elseif ($nilai > 75){
            echo "Nama = $nama,Nilai = $nilai,Grade B<hr>";
        }
        elseif($nilai > 65){
            echo "Nama = $nama,Nilai = $nilai,Grade C<hr>";
        }
    }
    echo"</pre>";


?>