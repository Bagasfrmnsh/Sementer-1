<?php
function hitung_luas_segitiga($alas, $tinggi) {
$luas_segitiga = ($alas * $tinggi)/2;
return $luas_segitiga;
}
 
function hitung_luas_persegi($panjang, $lebar){
$luas_persegi = $panjang * $lebar;
return $luas_persegi;
}

function hitung_luas_lingkaran($jari, $jari1){
$luas_lingkaran = ($jari * $jari1)*3.14;
return $luas_lingkaran;
}
 
$lingkaran = hitung_luas_lingkaran(5,7);
$segitiga = hitung_luas_segitiga(4,3);
$persegi  = hitung_luas_persegi (5,3);

echo "Luas Lingkaran : $lingkaran<br/>";
echo "Luas Segitiga : $segitiga<br />";
echo "Luas Persegi Panjang : $persegi<br />";
 
?>