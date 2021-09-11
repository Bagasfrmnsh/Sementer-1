<html>
    <body>

<?php $file ="movie.json";?>
    <?php $anggota = file_get_contents($file);?>
        <?php $data = json_decode($anggota);?>
<b><center>Data Film</center>
  <center><?php echo $data->Title. "<br>";?></center>
<center>
<td><img src= " spider-verse.jpg" alt=" "></td><br>
        </center>
    <p align = "center">Ben has recently graduated college, with his parents now expecting great things from him. At his<br> 
    \"Homecoming\" party, Mrs. Robinson, the wife of his father's business partner, 
    has Ben drive her home, which<br>
    leads to an affair between the two. 
    The affair eventually ends, 
    but comes back to haunt him when he finds <br>himself falling for Elaine, 
    Mrs. Robinson's daughter.",</p>
  <?php echo "<b>Tahun Rilis :" .$data->Year. "<br>";?></td>
 <td>
    <?php echo "<b>Tanggal Rilis</b> :" .$data->Released. "<br>";?></td>
 <td>
    <?php echo "<b>Durasi Film</b>:" .$data->Runtime. "<br>";?>
        <?php echo " <b>Genre </b>:" . 
        implode(" , " , $data->Genre). "<br>";?>
            <?php 
            echo "<b>Director</b> : " .$data->Director. "<br>";?>
 <?php 
    echo "<b>Penulis  </b><li>" . 
        implode("<li>",$data->Writers). "<br>";?>
    <?php 
    echo "<b>Pemeran  </b><li>"  . 
        implode("<li>",$data->Actors). "<br>";?>
        <?php echo "<b>Bahasa</b> :" .$data->Language. "<br>";?>
 <?php echo "<b>Negara</b> :" .$data->Country. "<br>";?>
    <?php 
    echo "<b>Penghargaan</b> :" .$data->Awards. "<br>";?>
        <?php 
        echo "<b>Nilai</b> :" .$data->imdbRating. "<br>";?>
    <?php 
    echo "<b>Vote</b> :" .$data->imdbVotes. "<br>";?>
        <?php 
        echo "<b>imdbID</b> :" .$data->imdbID. "<br>";?>
</td>
</body>
</html>



