<?php

class penggajihan{
public $totalgaji;
public $totalpengeluaran;

    //METHOD GAJI!
  public function gaji($jabatan,$pendidikan){
      echo "<b>Pendapatan Bagasfrmnsh !</b><br><br>";
      if($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "<tr>";
        echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
    }
    
    else if($jabatan == "Manager"){
        $gaji = 5000000;
      
        echo "<tr>";
        echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
    
        
    }
    else if($jabatan == "Karyawan"){
        $gaji = 3000000;
        
        echo "<tr>";
        echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
        
    }else {
        
        echo 0;
        
    }
      echo "<tr>";
        
        echo "</tr>";
        if($pendidikan == "S1"){
            $tunjangan = 2000000;
           
            echo "<td>Pendidikan : $pendidikan</td><br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>";
            echo "<td>Pendidikan : $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMK"){
            $tunjangan = 1000000;
            echo "<tr>";
            echo "<td>Pendidikan : $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan Pendidikan : Rp.$tunjangan<br></td>";
            echo "</tr>";
        }
      $this->totalgaji=$gaji+$tunjangan;
      echo "Total Gaji : $this->totalgaji <br><hr>";
      
    
  }
    //METHOD PENGELUARAN!
    public function pengeluaran($listrik,$kontrakan,$kendaraan){
        echo "<b>Pengeluaran !</b></br><br>";
        echo "Bayar listrik : $listrik<br>";
        echo "Bayar Kontrakan : $kontrakan<br>";
        echo "Cicilan Kendaraan : $kendaraan<br>";
        $this->totalpengeluaran = $listrik+$kontrakan+$kendaraan;
        echo "Total Bayar : $this->totalpengeluaran <br><hr>";
    }
  //METHOD SISA!
 function sisa(){
     $total= $this->totalgaji-$this->totalpengeluaran;
     echo "<b>Sisa : $total</b>";
 }
}
$oop = new penggajihan();
echo $oop->gaji("Direktur","SMK");
echo $oop->pengeluaran(200000,1000000,500000);
echo $oop->sisa();
?>
