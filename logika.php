<?php
//if
/*


cetak gol 
total cetak gol >= 10 'medali emas'
total cetak gol <= 8  'medali perak'
total cetak gol >= 4  'medali perunggu'
total cetak gol <  4  'medali emas bobodoan'
*/

$gol=9;

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


?>
