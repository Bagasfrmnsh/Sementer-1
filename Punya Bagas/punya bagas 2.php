<?php

$jenis = "Makanan";
$pesanan = "Sushi";
$harga = 15000;
$jumlah = 3;
$total = $harga * $jumlah;
$diskon = 0.20 * $total;
$totalbayar2 = $total - $diskon;
$totalbayar1 = $total;

if ($harga = 15000) {
    if ($total < 50000 && $total >= 0) {
        echo "======== Restoran Bagas ======== </br>";
        echo "Jenis Pesanan : $jenis <br>";
        echo "Nama Pesanan : $pesanan <br>";
        echo "Jumlah : $jumlah <br>";
        echo "Total : $total </br>";
        echo "Total Bayar : $totalbayar1 </br>";
        echo "======== Terima Kasih =========";

    }if ($total >= 50000) {        
        echo "======== Restoran Bagas ======== </br>";
        echo "Jenis Pesanan : $jenis <br>";
        echo "Nama Pesanan : $pesanan <br>";
        echo "Jumlah : $jumlah <br>";
        echo "Diskon 20% : $diskon <br>";
        echo "Total : $total </br>";
        echo "Total Bayar : $totalbayar2 </br>";
        echo "======== Terima Kasih =========";
        

    }
}else{
    echo "Uang Tidak Mencukupi";
}
?>