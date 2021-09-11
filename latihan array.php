<?php
//ARRAY YANG KE 1
//-----
$nama = array(
 1=> "Andri",
 2=> "Joko",
 3=> "Sukma",
 4=> "Rina",
 5=> "Sari");

echo "Kelompok 1 :".$nama['5']. "&" .$nama['4'];
echo "<br/>";
echo "Kelompok 2 :".$nama['3']. "&"  .$nama['1'];
echo "<br>";

//ARRAY YANG KEDUA 2
//---
$arrNilai = array (
    "Ani" => 80,
    "Otim" => 90,
    "Ana" => 75,
    "BUdi" => 85,
);

echo $arrNilai['Ana'];
echo " ";
echo  $arrNilai['Otim'];

$buah = array(
    "Semangka",
    "Melon",
    "Anggur",
    "Stowbarry",
    "Alpukat");


$warna = array(
    1=>"Hijau",
    2=>"Merah",
    3=>"Ungu");    

    //cara akses array
    echo "Buah " .$buah[5] ." Berwarna " .$warna["1"];


//array assosiatif 2
$employee = [];
$employee['name'] = 'John';
$employee['email'] = 'john@example.com';
$employee['phone'] = '12345678';

echo "Nama : ".$employee['name'];
echo "<br>";
echo "Nama : ".$employee['email'];
echo "<br>";
echo "Nama : ".$employee['phone'];
?>