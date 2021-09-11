<?php
if (isset($_POST['simpan'])){
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];
    $indonesia =$_POST['indonesia'];
    $inggris =$_POST['inggris'];
    $matematika =$_POST['matematika'];
    $produktif =$_POST['produktif'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Nilai Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
            <th>nis</th>
                <th>nama</th>
                <th>kelas</th>
                <th>b.indo</th>
                <th>b.inggris</th>
                <th>matematika</th>
                <th>produktif</th>
                <th>Total Nilai</th>
                <th>rata rata</th>
                <th>Grade</th>
                <th>status</th>
</tr>
<?php
for($i=0; $i<count($nama); $i++){
    ?>
    <tr>
    <td><?php echo $nis[$i];  ?> </td>
        <td><?php echo $nama[$i];  ?> </td>
<td><?php echo $kelas[$i];  ?></td>
<td><?php echo $indonesia[$i];  ?></td>
<td><?php echo $inggris[$i];  ?> </td>
<td><?php echo $matematika[$i];  ?> </td>
<td><?php echo $produktif[$i];  ?> </td>
<?php
$total_nilai=$indonesia[$i]+$inggris[$i]+$matematika[$i]+$produktif[$i];
?>
<td><?php echo $total_nilai;  ?> </td>
<?php $rata_rata=$total_nilai/4; ?>
<td><?php echo $rata_rata; ?></td>
<?php
if($rata_rata >=90 && $rata_rata <= 100){
    echo "<td>A</td>";
}else if($rata_rata >=80 && $rata_rata <= 89){
    echo "<td>B</td>";
}else if($rata_rata >=75 && $rata_rata <= 79){
    echo "<td>C</td>";
}else if($rata_rata >=50 && $rata_rata <= 74){
    echo "<td>D</td>";
}else if($rata_rata >=0 && $rata_rata <= 49){
    echo "<td>E</td>";
}
?>
<?php
if ($rata_rata>= 75){
    ?>
    <td> lulus </td>
    <?php
} else {
    ?><td>tidak lulus</td>


<?php
}
}
?>
</tr>
</table>
</center>
</body>
</html>
    
</body>
</html>