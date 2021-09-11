<?php
// File json yang akan dibaca
$file= "anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca/menampilkan data array menggubakan foreach
foreach ($data as $key => $d) {
    echo "NO : " . $d['no']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['jurusan']. "<br>";
    echo "<br>";
    
}

?>
