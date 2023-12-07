<?php
include_once '../../config.php';
include_once '../../controllers/PasienController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pasienController = new PasienController($db);
    $result = $pasienController->deletePasien($id);

    if ($result) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "failed"]);
    }
}
?>