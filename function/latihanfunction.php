<?php
function perkenalan($a,$b){
    echo "Perkenalkan, Nama saya ".$a."<br/>" ;
    echo "Umur saya ".$b." Tahun, ";
if($b >= 17){
    echo "anda sudah memiliki KTP";
    }
else{
    echo "anda belum memiliki KTP";  
    }
}
perkenalan("Bagas Firmansyah",17);
echo "<br/>";


function penjumlahan($angka1,$angka2){

    $tambah = $angka1 + $angka2;
    $tambah1 = $angka1 - $angka2;
    $tambah2 = $angka1 * $angka2;
    $tambah3 = $angka1 / $angka2;
    
    echo "Hasil Penjumlahan : ". $tambah. "<br/>";
    echo "Hasil Pengurangan : ". $tambah1. "<br/>";
    echo "Hasil Perkalian : ". $tambah2. "<br/>";
    echo "Hasil Pembagian : ". $tambah3;
    
}
penjumlahan(17,5);



    

  


?>