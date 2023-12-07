<?php
//membuat class
class Mahasiswa{ 
    //property public
    public $nama;
    private $nim = "220102079";

    //public method
    public function tampilkan_nama(){
        //nilai kembalian
        return "Nama Saya Chinta <br>";
    }

    //membuat protected method
    private function tampilkan_nim(){
        return "NIM saya " . $this->nim;
    }

    //public function method
    public function tampilkan_nim2(){
        return "NIM saya " . $this->tampilkan_nim();
    }
}

//instansiasi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new Mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();

//memanggil method tampilkan_nim
echo $mahasiswa->tampilkan_nim2();
?>