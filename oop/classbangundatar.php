<?php
class bangun_datar {
    //property/atribut (ciri dari kucing = berbulu)
    
    //method/function (tindakan kucing = makan, mengeong)
    function persegi($sisi = 10){
        echo "Menghitung Luas Persegi <br>";
        echo "Sisinya = $sisi <br>";
        $luas = $sisi * $sisi;
        echo "Luasnya = $luas<hr>";
        echo "<br>";
    }
    function segitiga($alas = 10, $tinggi =5){
        echo "Menghitung Luas Segitiga <br>";
        echo "Alasnya = $alas <br>";
        echo "Tingginya = $tinggi <br>";
        $luas1 = $alas * $tinggi/2;
        echo "Luasnya = $luas1<hr>";
        echo "<br>";
        //...isi dari method 
    }
    function lingkaran($phi = 3.14, $jari =10){
        echo "Menghitung Luas Lingkaran <br>";
        echo "Phi = $phi <br>";
        echo "Jari-Jari = $jari <br>";
        $luas2 = $jari * $jari * 3.14;
        echo "Luasnya = $luas2<hr>";
        echo "<br>";
        //...isi dari method 
    }
    
}

    //Object hasil akhir (object wajib diluar class)
    //dan diawali dengan variabel
    $bagas = new bangun_datar;
    $bagas -> persegi(10);
    $bagas -> segitiga(10,5);
    $bagas -> lingkaran();
    
?>