<?php
function perkenalan($a,$b){
    echo "Perkenalkan, Nama saya ".$a."<br/>" ;
    echo "Umur saya ".$b." Tahun";
}
perkenalan("Bagas Firmansyah",17);

?>


<?php
$nilai =54;
 if($nilai >= 90 && $nilai <= 100 ){
     echo "Grade A";
 }
 else if($nilai >= 80 && $nilai <= 89){
    echo "Grade B";
    } 
else if($nilai >= 70 && $nilai <= 79){
    echo "Grade C";
    }
else if($nilai >= 60 && $nilai <= 69){
    echo "Grade D";
    } 
else if($nilai < 60 && $nilai > 0 ){
    echo "Grade E";
}else{
    echo "Nilai Kacau !";
 }
     
    

  

 ?>