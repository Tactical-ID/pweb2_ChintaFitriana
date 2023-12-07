<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>
    <?php

class manusia{
public $nama_saya;
private $nama_belakang;

function panggil_nama($saya){
    $this -> nama_saya = $saya;
}
}

//class turunan atau subclass dari manusia
class mahasiswa extends manusia{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa){
        $this -> nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa 
$informatika = new mahasiswa();

$informatika -> panggil_nama("Chinta");
$informatika -> panggil_mahasiswa("Fitriana");

//output property
echo "Nama Depan Saya : " . $informatika->nama_saya . "<br>";
echo "Nama Belakang : " . $informatika->nama_mahasiswa;

?>

    <h4>LATIHAN</h4>
    <?php
    class manusia2 {
        public $nama_saya;
        private $nama_belakang;
    
        function panggil_nama($saya) {
            $this->nama_saya = $saya;
        }
    
        function panggil_mahasiswa($mahasiswa, $belakang) {
            $this->nama_belakang = $belakang;
            $this->nama_saya = $mahasiswa;
        }
    
        function getNamaBelakang() {
            return $this->nama_belakang;
        }
    }
    
    $informatika2 = new manusia2();
    
    $informatika2->panggil_nama("Chinta");
    $informatika2->panggil_mahasiswa("Sejatining", "Fitriana");
    
    echo "Nama Depan Saya : " . $informatika2->nama_saya . "<br>";
    echo "Nama Belakang : " . $informatika2->getNamaBelakang();
    ?>
</body>

</html>