<?php  
 class bangun_datar {   
     //property bagas
   public $luas_persegi;
    public $keliling_persegi;
   public $luas_persegip; 
    public $keliling_persegip;
   public $luas_segitiga;
    public $keliling_segitiga;
   public $luas_lingkaran;
    public $keliling_lingkaran;
   
 }
 //Methodnya Bagas!
   class persegi extends bangun_datar{
   function luas_persegi($sisi)    
   {    
     echo "<b>Bangun datar Persegi</b><br/>";
     echo "Sisinya : ".$sisi;
     echo "<br>";
     $this->luas_persegi = $sisi * $sisi;
     $this ->keliling_persegi = $sisi * 400;
     echo "Luasnya : ".$this->luas_persegi."<br>";
     echo "Kelilingnya : ".$this->keliling_persegi."<hr>";


   }
}
class persegi_panjang extends bangun_datar{
    function luas_persegi_panjang($panjang,$lebar)    
    {   
      echo "<b>Bangun datar Persegi Panjang</b></br>";
      echo "Panjangnya : ".$panjang. "<br/>";
      echo "Lebarnya : ".$lebar;
      echo "<br>";
      $this->luas_persegip = $panjang * $lebar;
      $this ->keliling_persegip = 2 * $panjang + $lebar;
      echo "Luasnya : ".$this->luas_persegip."<br>";
      
      
    }
 }
 class segitiga extends bangun_datar{
    function luas_segitiga($alas,$tinggi,$s)    
    {    
      echo "<b>Bangun datar Segitiga</b><br>";
      echo "Alasnya : ".$alas. "<br/>";
      echo "Tingginya : ".$tinggi;
      echo "<br>";
      $this->luas_segitiga = $alas * $tinggi /2 ;
      $this->keliling_segitiga = $s + $s + $s;
      echo "Luasnya : ".$this->luas_segitiga."<br>";
      
    }
 }
 class lingkaran extends bangun_datar{
    function luas_lingkaran($jari, $phi=3.14)    
    {     
      echo "<b>Bangun datar Lingkaran</b><br>";
      echo "Jari-Jarinya : ".$jari;
      echo "<br>";
      $this->luas_lingkaran = $jari * $jari * $phi ;
      $this->keliling_lingkaran = 2 *$phi * $jari;
      echo "Luasnya : ".$this->luas_lingkaran."<br>";
      
    }
 }

   //instalasinya!
 $cetak = new persegi();
    $cetak->luas_persegi(10);

 $cetak = new persegi_panjang();
    $cetak->luas_persegi_panjang(12,5);
 $cetak = new segitiga();
    $cetak->luas_segitiga(5,2,3);
$cetak = new lingkaran();
    $cetak->luas_lingkaran(10);
 ?>