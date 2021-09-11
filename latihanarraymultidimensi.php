<?php
echo "<br>";
$data = [['jenis' => "Olahraga", 'cabang' => [
    ['lomba' => "Sepak Bola", 'artikel' => [
        ['judul'=> "Sepak Bola Nasional"],
        ['judul' => "Sepak Bola Internasional"]
    ]],
    ['lomba' => "Bulu Tangkis", 'artikel' => [
        ['judul'=> "Bulu Tangkis Nasional"],
        ['judul' => "Bulu Tangkis Internasional"]
    ]],
    ['lomba' => "Atletik", 'artikel' => [
        ['judul' => "Atletik Nasional"],
        ['judul' => "Atletik Internasional"]
    ]]
]],     
['jenis' => "Ekonomi", 'cabang' => [
    ['lomba' => "Bank", 'artikel' => [
        ['judul'=> "Bank Mandiri"],
        ['judul' => "Bank BCA"]
    ]],
    ['lomba' => "Saham", 'artikel' => [
        ['judul'=> "Apotek"],
        ['judul' => "Minyak Pertamina"]
    ]],
]],
['jenis' => "Politik", 'cabang' => [
    ['lomba' => "Politik", 'artikel' => [
        ['judul'=> "Luar Negeri"],
        ['judul' => "Dalam Negeri"]
    ]],
    ['lomba' => "Saham", 'artikel' => [
        ['judul'=> "Apotek"],
        ['judul' => "Minyak Pertamina"]
    ]],
    
]],
['jenis' => "Kesehatan", 'cabang' => [
    ['lomba' => "Hobi", 'artikel' => [
        ['judul'=> "Bernyanyi"],
        ['judul' => "Mendengarkan music"]
    ]],
    ['lomba' => "Cita-cita", 'artikel' => [
        ['judul'=> "Programmer"],
        ['judul' => "Penyanyi"]
    ]],
    
]],
    ];
    echo "Artikel : Detik.com";
    echo "<br>";
    echo "Jenis Berita : ";

    foreach($data as $data1){
        echo "<ul>";
        echo "<li>" .$data1['jenis'] ."</li>";

        foreach ($data1['cabang'] as $data2){
            echo "<ul>";
            echo "<li>" .$data2['lomba'] ."</li>";

            foreach($data2['artikel'] as $data3){
                echo "<ul>";
                echo "<li>" .$data3['judul'] ."</li>";
                echo "</ul>";
            }
            echo "</ul>";
        }
        echo "</ul>";
    }
    echo "</br";
?>