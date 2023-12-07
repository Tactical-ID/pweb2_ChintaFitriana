<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database ();
$db = $database ->getKoneksi ();

if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $matkul = $_POST['matkul'];

    $dosenController = new DosenController($db);
    $result=$dosenController->createDosen($nidn, $nama, $alamat, $matkul);

    if($result){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }
}
?>