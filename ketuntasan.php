<?php
 $nilai = 74;
 if($nilai >= 75 && $nilai <= 100) {
     echo "Selamat Kamu Lulus!";
 }
 else if($nilai < 75 && $nilai >= 0){
     echo "Kamu Tidak Lulus!";
 }else{
    echo "Nilai Tidak Valid";
 }
    
?>