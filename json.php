<?php
$mahasiswa = [
    'nama' => "Alhidayah",
    'domisili' => "Surabaya"
];

 echo json_encode($mahasiswa);

$listMahaSiswaJSON ='[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
]';

//dikonversikan ke JOSN
$list =json_decode($listMahaSiswaJSON);

//tampilkan datanya
foreach($list as $mahasiswa){
    echo "Nama : {$mahasiswa->nama} <br>";
}
  
?>