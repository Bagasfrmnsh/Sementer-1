<?php
$data = [
    [
    'nama' => "Palah",
    'buah' => "Mangga",
    'jenis' => "Apel",
    'jenis' => "Pear"
    

    ],
//     [
//     'nama' => 'Meylani',
//     'buah' => 'Anggur'
//    ]
];

foreach ($data as $data2) {
    echo "Nama Pemilik : " . $data2['nama'] . "<br>";
    echo "Buah Kesukaan : <br>  " . $data2['buah'];
    echo "<ul>";
    echo "</ul>";
    
}

?>        