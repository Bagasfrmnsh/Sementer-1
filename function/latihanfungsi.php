<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai RPL</title>
</head>
<body>
<center>
    <h2>Nilai Ujian Kelas 12 RPL</h2>
    <table border="1">
<tr>
    <td>Nama</td>
    <td>Matetmatika</td>
    <td>Bahasa Inggris</td>
    <td>Bahasa Indonesia</td>
    <td>Kejuruan</td>
    <td>Rata-rata</td>
    <td>Status</td>
    <td>Grade</td>
</tr>
<?php
function penjumlahan($nama, $mtk,$inggris,$indo,$kejuruan){
    echo "<tr>";
    echo "<th>" . $nama . "</th>";
    echo "<th>" . $mtk . "</th>";
    echo "<th>" . $inggris . "</th>";
    echo "<th>" . $indo . "</th>";
    echo "<th>" . $kejuruan . "</th>"; 
    

    $rata = $mtk + $inggris + $indo + $kejuruan;
    $rata2 = $rata / 4;

      echo "<th>" .  $rata2  . "</th>";
      
      if ($rata2 >= 75 && $rata2 <= 100) {
        echo "<th> Lulus </th>";
        
     }else{
        echo  "<th> Tidak Lulus </th>";
    }
      
      if ($rata2 >= 90 && $rata2 <= 100) {
        echo "<th> A </th>";
    }
    elseif ($rata2 >= 80 && $rata2 <= 89) {
       echo "<th> B </th>";
    }
    elseif ($rata2 >= 75 && $rata2 <= 79) {
       echo "<th> C </th>";
    }
    elseif ($rata2 >= 50 && $rata2 <= 74) {
        echo "<th> D </th>";
    }
    elseif ($rata2 >= 0 && $rata2 <= 49) {
        echo "<th> E <th>";
    }
    echo "</tr>";
    }
    
    penjumlahan("Bagas",40 ,70 ,60 ,80 ,40);
    ?>
    </table>
</center>
</body>
</html>
    