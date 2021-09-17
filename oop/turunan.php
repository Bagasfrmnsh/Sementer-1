<?php
//class utama
class manusia{

    public function berinama(){
        echo "Nama saya Bagas<br>";
    }
}
// class turunan
class teman extends manusia{

    function berinamateman(){


        echo $this->berinama();
        echo "nama teman saya Anton";
    }
}

// instansiasi class teman 
$malasngoding = new teman;

$malasngoding->berinamateman();

class manusia{
    public $teman = "Bagas Firmansyah";
    public function berinama(){
        echo "Nama saya Kenan<br>";
    }
}

//class turunan
class teman extends manusia{

    public function berinamateman(){
        echo "nama teman saya". $this->teman;
    }
}






?>