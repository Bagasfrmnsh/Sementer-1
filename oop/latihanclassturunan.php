<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan</title>
</head>

<body>
    <form action="" method="post">
        <center>
            <legend>
                <h4>PENGGAJIHAN<br>
                GURU/KARYAWAN YAYASAN ASSALAAM</h4>
                </legend>
    <table>
<tr>
        <td>
        <label for="no">No
            </label>
        </td>
        <td>:</td>
        <td><input type="number" name="no">
        </td>
</tr>
<tr>
        <td>
        <label for="nama">Nama
            </label>
        </td>
        <td>:</td>
        <td><input type="number" name="nama">
        </td>
</tr>
<tr>
        <td>Unit</td>
        <td>:</td>
        <td>
        <select name="unit">
            <option value=""></option>
            <option value="Direktur">TK</option>
            <option value="Manager">SD</option>
            <option value="Karyawan">SMP</option>
            <option value="OB">SMK</option>

        </select>
        </td>
</tr>

<tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><input type ='date' name='tanggal'></td>
</tr>

<tr>
        <td><br><center><b> &nbsp;&nbsp;&nbsp;&nbsp;
        Gaji</b></center></br></td>
</tr>


<tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>
        <select name="jabatan" required>
            <option value=""></option>
            <option value="Direktur">Kepala Sekolah</option>
            <option value="Manager">Guru</option>
            <option value="Karyawan">Karyawan</option>
        </select>
        </td>
</tr>

<tr>
        <td>
        <label for="lama">Lama Kerja
            </label>
        </td>
        <td>:</td>
        <td><input type="number" name="lama">
        </td>
</tr>


<tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td>
        <select name="status" required>
            <option value=""></option>
            <option value="SD">Pegawai Tetap</option>
            <option value="SMP">Pegawai Kontrak</option>
            
        </select>
        </td>
</tr>

<tr>
        <td><br><center><b> &nbsp;&nbsp;&nbsp;&nbsp;
        Potongan</b></center></br></td>
</tr>


<tr>
        <td>
        <label for="bpjs">BPJS</label>
        </td>
        <td>:</td>
        <td>
        <input type="number" name="bpjs"> 
        </td>
</tr>
<tr>
        <td>
        <label for="pinjaman">Pinjaman</label>
        </td>
        <td>:</td>
        <td>
        <input type="number" name="pinjaman"> 
        </td>
</tr>

<tr>
        <td>
        <label for="tabungan">Tabungan</label>
        </td>
        <td>:</td>
        <td>
        <input type="number" name="tabungan"> 
        </td>
</tr>

<tr>
        <td>
        <label for="lainnya">Lainnya</label>
        </td>
        <td>:</td>
        <td>
        <input type="number" name="lainnya"> 
        </td>
</tr>

        </table>
        <button type="submit" name="simpan">Proses</button>
    </form>
</center>
</body>

</html>
<?php

if(isset($_POST['simpan'])){
$no = $_POST['no'];
$nama = $_POST['nama'];
$unit = $_POST['unit'];
$tanggal = $_POST['tanggal'];
$jabatan = $_POST['jabatan'];
$lama = $_POST['lama'];
$status = $_POST['status'];
$bpjs = $_POST['bpjs'];
$pinjaman = $_POST['pinjaman'];
$tabungan = $_POST['tabungan'];
$lainnya = $_POST['lainnya'];

echo "<center>";
echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";

   echo "<center/>-------------------------------------------------------<br>";
   echo "<tr>";
   echo "<td>No :$no<br></td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Nama : $nama<br></td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Unit : $unit<br></td>";
   echo "</tr>";
   echo "<td>Tanggal : $tanggal<br></td>";
   echo "<tr>";
   echo "<td><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaji</br></b></td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>jabatan : $jabatan<br></td>";
   echo "</tr>";
   echo "<td>Lama Kerja : $lama<br></td>";
   echo "</tr>";
   echo "<td>Status Kerja : $status<br></td>";
   echo "</tr>";
   echo "<td>BPJS : $bpjs<br></td>";
   echo "</tr>";
   echo "<td>Pinjaman : $pinjaman<br></td>";
   echo "</tr>";
   echo "<td>Tabungan : $tabungan<br></td>";
   echo "</tr>";
   echo "<td>Lainnya : $lainnya<br></td>";
   echo "</tr>";
   
}
?>

