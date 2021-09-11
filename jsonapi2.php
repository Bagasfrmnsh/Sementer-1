<?php
$url = "https://api.kawalcorona.com/indonesia/provinsi/";
//persiapkan curl/ init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $oputput contains the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo $output;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provinsi</title>
</head>
<body>
    <center>
    <h1><i>Data Covid-19</i></h1>
    <table border = "1">
<tr>
    <th>Kode Provinsi</th>
    <th>Provinsi</th>
    <th>Positif</th>
    <th>Sembuh</th>
    <th>Meninggal</th>
</tr> 
<?php
$data = json_decode($dataCovid);
    foreach ($data as $covid) {
?>
<tr>
    <td><center><?php echo $covid->attributes->Kode_Provi;?></center></td> 
    <td><?php echo $covid->attributes->Provinsi;?></td> 
    <td><?php echo $covid->attributes->Kasus_Posi;?></td> 
    <td><?php echo $covid->attributes->Kasus_Semb;?></td> 
    <td><?php echo $covid->attributes->Kasus_Meni;?></td> 
</tr>
<?php

}
?>
</center>
</body>
</html>