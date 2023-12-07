<?php
// memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);

    if($result){
        header("location: index.php");
    }else {
        header("location: tambah.php");
    }
}
?>