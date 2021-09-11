<?php
    if(isset($_POST['simpan'])){
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $indonesia = $_POST['indonesia'];
        $inggris = $_POST['inggris'];
        $matematika = $_POST['matematika'];
        $produktif = $_POST['produktif'];
        $total_nilai = $indonesia + $inggris + $matematika;
        $rata_rata = $total_nilai / 4;
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siwa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata-Rata</th>

                </tr>
                <?php
                for($i=0; $i<count($nama); $i++){
                    ?>
                    <tr>
                    <td><?php echo $nis[$i]; ?></td>
                    <td><?php echo $nama[$i]; ?></td>
                    <td><?php echo $kelas[$i];  ?></td>
                    <td><?php echo $indonesia[$i];  ?></td>
                    <td><?php echo $inggris[$i];  ?></td>
                    <td><?php echo $matematika[$i];  ?></td>
                    <td><?php echo $produktif[$i];  ?></td>
                    <td><?php echo $total_nilai[$i];  ?></td>
                    <td><?php echo $rata_rata[$i]; } ?></td>

                    </tr>
                    </table>
                    </center>
</body>
</html>