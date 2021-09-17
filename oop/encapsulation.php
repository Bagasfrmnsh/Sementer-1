<?php
// //class manusia
// class manusia{
//     //Property/atribut
//     public $nama;

//     //method manusia
//     public function tampilkan_nama(){
//         echo "Nama Saya Bagas";
//     }
//     public function biodata(){
//         echo $this -> tampilkan_nama();
//     }

// }
// $manusia = new manusia();

//     echo $manusia-> biodata();


// Private
// class manusia {
//     private $nama = "Bagas";

//     // method public
//     public function tampilkan_nama(){
//         return "Nama Saya ".$this->nama;
//     }
// }
// $manusia = new manusia();

// echo $manusia->tampilkan_nama();



    //PROTECTED
// class manusia{
//     //menentukan property dengan method
//     // protected $nama = "Malas Ngoding";

//     protected function nama() {
//         return "Nama Saya Bagas Firmansyah";
//     }
//     public function keluarkan(){
//         return $this->nama();
//     }
//     // public function tampilkan_nama() {
//     //     return $this->nama;
//     // }
// }
// $manusia = new manusia();

// echo $manusia->keluarkan();

class manusia{
    function __construct(){
    echo "Ini adalah isi method construct <br/>";
}
//method manusia
function tampilkan_nama(){
    return "Nama Saya Bagas Firmansyah <br>";
}
function kelas(){
    return "XII RPL 1 <br>";
}
function hobi(){
    return "Bernyanyi, Mendengarkan music adalah hobiku <br>";
}
}
$manusia = new manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> kelas();
echo $manusia -> hobi();


?>