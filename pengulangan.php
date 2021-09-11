<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>

<body>
<center>
    <form action="" method="post">
        <h1>Form Pengulangan</h1>
            <table>
<tr>
<p>1. Deret Bilangan Ganjil</p>
<p>2. Segitiga Sama Kaki Terbalik</p>
<p>3. Deret Bilangan Kelipatan 3</p>


        <td>
        <label for="nama"> Pilih</label>
        </td>
        <td>:</td>
        <td><input type="text" name="nama" id="nama" required>
        </td>
</tr>

<tr>
        <td>Masukan Angka</td>
        <td>:</td>
        <td><input type="text" name="angka"></td>
</tr>

<tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>

            </center>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;

        //menghitung jam lembur
        $jamLembur = $jamKerja-173;
        
        //menambahkan jam lebur setiap jam nya
        // for($i = 0; $i<=$jamLembur; $i++){
             $gajiLembur = $jamLembur*20000;
        // }

        //menentukan gaji dan tunjangan berdasarkan golongan
        if($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($golongan == 4){
            $gajiPokok = 3000000;
            $tunjangan = 300000; 
        }else{
            echo "Anda bukan golongan kami";
        }

        //menghitung pajak gaji pokok dan lembur
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $gajiLembur * 0.05;
        
        //menghitung total Pajak
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;

        //mengitung total gaji
        $totalGaji = $gajiPokok+$gajiLembur-$totalPajak;

        //menampilkan
        echo "Nama : <b>$nama</b> <br>
        Jenis Kelamin : <b>$jk </b> <br>
        Agama : <b>$agama</b> <br>
        Gaji Pokok : <b>$gajiPokok</b> <br>
        Gaji Lembur : <b>$gajiLembur</b> <br>
        Pajak Gaji Pokok : <b>$pajakGajiPokok</b>  <br>
        Pajak Gaji Lembur : <b>$pajakGajiLembur</b> <br>
        Total Pajak : <b>$totalPajak</b> <br>
        Tunjangan Pengabdian: <b>$tunjangan</b> <br>
        Gaji Yang Diterima: <b>$totalGaji</b><br>";
    }
?>
if(isset($_POST['hitung'])){
        
    $tanggal = $_POST["tanggal"];
    echo "<center><h1>Stuk Gaji Keryawan</center></h1>";
    echo "<center>--------------------------------------------</center>";
    echo "&nbsp; Tanggal: $tanggal";
}