<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location: tampil_mhs.php");
}elseif($aksi=="update"){
    $db->update_mhs($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location: tampil_mhs.php");
}elseif($aksi=="hapus_mhs"){
    $db->hapus_mhs($_GET ['id']);
    header("location: tampil_mhs.php");
}