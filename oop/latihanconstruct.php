<?php
class manusia{
    function __construct($nama, $jk, $kelas){
    echo "Nama Saya : $nama <br/>";
    echo "Jenis Kelamin : $jk <br/>";
    echo "Kelas : $kelas <br/>";
    echo "<hr>";
    }
}
$manusia = new manusia("Bagas", "Laki-Laki", "XII RPL 1");
$manusia = new manusia("Ridwan", "Laki-Laki", "XII RPL 2");
$manusia = new manusia("Dinda", "Perempuan", "XII RPL 3");

class manusia{
    
        function __destruct(){
            echo "Ini adalah Method DESCTRUCT!<br>";
        }
        function nama(){
            echo "Nama saya adalah Bagas Firmansyah<br> ";
        }
        function __construct(){
            echo "Ini adalah Method CONSTRUCT!<br>";
        }
    }
    $cetak = new manusia();
    echo $cetak -> nama();
    
    
    
?>