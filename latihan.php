<?php
/*


cetak gol 
total cetak gol >= 10 'medali emas' & = 20 "Mendapatkan bonus 100jt"
total cetak gol >= 7  'medali perak' & = 9 "Mendapatkan bonus 80jt"
total cetak gol >= 4  'medali perunggu' & = 5 "Mendapatkan bonus 50jt"
total cetak gol <  4  'medali emas bobodoan' & "Tidak mendapatkan bonus"
*/

$gol=20;

if ($gol >= 10){
    echo "medali emas, dengan cetak gol : " .$gol; 

}
elseif($gol >= 8){
    echo "medali perak, dengan cetak gol : " .$gol;
} 
elseif($gol >= 4){
    echo "medali perunggu, dengan cetak gol : " .$gol;
}
elseif($gol <4 ){
    echo "medali emas bobodoan, dengan cetak gol : " .$gol;
}
switch ($gol) {
    case 20:
        echo "Mendapatkan bonus 100jt";
        break;
    case 8:
        echo "Mendapatkan bonus 80jt";   
    
    case 3:
        echo "Mendapatkan 50 jt";
        default:

        echo "Tidak mendapatkan bonus";
        break;

}
