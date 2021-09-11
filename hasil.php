<?php
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata_bijak = $_POST['kata_bijak'];
    
    echo "(============ BIODATA DIRI ============) <br>";
    echo "======================================== <br>";
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Alamat : $alamat <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan : $pendidikan <br>";
    echo "Status : $status <br>";
    echo "Hobi : $hobi <br>";
    echo "Cita-Cita : $cita <br>";
    echo "Kata-Kata Bijak : $kata_bijak <br>";   
}
?>