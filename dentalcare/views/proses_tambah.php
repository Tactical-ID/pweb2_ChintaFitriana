<?php
// memanggil class model database
include_once '../../config.php';
include_once '../../controllers/PasienController.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $id_pasien = $_POST['id_pasien'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pelayanan = $_POST['pelayanan'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    $pasienController = new PasienController($db);
    $result=$pasienController->createPasien($nama, $id_pasien, $jenis_kelamin, $pelayanan, $telepon, $alamat);

    if($result){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }
}
?>