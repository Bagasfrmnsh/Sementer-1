<?php

// File json yang akan dibaca
$file= "latihan.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca/menampilkan data array menggubakan foreach
foreach ($data as $key => $d) {
    echo "Nama : ". $d['nama']. "<br>";
    echo "Domisili : ". $d['domisili']. "<br>";
    echo "Hobi :";
    echo "<ul>";
    echo "<li>"; 
    echo implode("<li>", $d ['hobi']) . "</li><br>";
    echo "</li>";
    echo "<ul>";
    
}
?>

