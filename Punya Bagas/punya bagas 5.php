<?php
$json = '{
    "nama" : "bagas",
    "domisili" : "bandung",
    "usia" : 17,
    "wni" : true,
    "hobi" : [
        "bernyanyi", "berlari", "bertamasya"
        ]
}';

$mahasiswa = json_decode($json);

echo "Nama : {$mahasiswa->nama} <br>";
echo "Domisili : {$mahasiswa->domisili} <br>";
echo "Hobi : " . implode(", ", $mahasiswa->hobi);


?>