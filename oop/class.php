<?php
//kerangka dasar
// class laptop {

//     //property/atribut (ciri dari kucing = berbulu)
//     var $pemilik;
//     var $merk;
//     var $ukuran_layar;


//     //method/function (tindakan kucing = makan, mengeong)
//     function hidupkan_laptop(){
//         return "Hidupkan Laptopnya";
//         //...isi dari method hidupkan_laptop
//     }
//     function matikan_laptop(){
//         return "Matikan Laptopnya";
//         //... isi dari method matikan_laptop
//     }
// }

//     //Object hasil akhir (object wajib diluar class)
//     //dan diawali dengan variabel
//     $laptop_andi = new laptop();
//     $laptop_anto = new laptop();

//     echo $laptop_andi -> hidupkan_laptop();
//     echo "<br>";
//     echo $laptop_andi -> matikan_laptop();
    



class sepedah {
        //property/atribut (ciri dari kucing = berbulu)
        var $pemilik_sepedah;
        var $kecepatan_sepedah;
        var $ukuran_sepedah;
        var $nama_sepedah;

        //method/function (tindakan kucing = makan, mengeong)
        function jalankan_sepedah(){
            return "Jalankan Sepedahmu Gunakan dengan hati-hati  
            <br>";
            //...isi dari method hidupkan_laptop
        }
        function simpan_sepedah(){
            return "Simpan Sepedahmu, Simpan ditempat yang aman! <br>";
            //... isi dari method matikan_laptop
        }
        function bersihkan_sepedah(){
            return "Jika sudah dipakai, Bersihkan sepedahmu";
            //... isi dari method matikan_laptop
        }
        
    }
    
        //Object hasil akhir (object wajib diluar class)
        //dan diawali dengan variabel
        $sepedah_bagas = new sepedah();
        $sepedah_kenan = new sepedah();
    
        echo $sepedah_bagas -> pemilik_sepedah="Bagas Firmansyah <br>";
        echo $sepedah_bagas -> jalankan_sepedah();
        echo "<br>";
        echo $sepedah_bagas -> nama_sepedah="Sepedah Gunung";
        echo "<br>";
        echo $sepedah_bagas -> ukuran_sepedah="33-37cm";
        echo "<br>";
        echo $sepedah_bagas -> kecepatan_sepedah="2-3 jam/Km";

        echo "<br><br>";
        
        
        
?>