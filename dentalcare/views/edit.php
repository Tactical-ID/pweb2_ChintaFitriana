<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien - Dental Care</title>
    <link rel="icon" href="../../component/assets/img/gigi.png" type="image/png">

    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <?php
include_once '../../config.php';
include_once '../../controllers/PasienController.php';
include_once '../../controllers/SidebarController.php';
require '../../component/header.html';
require '../../component/sidebar.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pasienController = new PasienController($db);
    $pasienData = $pasienController->getPasienById($id);

    if($pasienData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $id_pasien = $_POST['id_pasien'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $pelayanan = $_POST['pelayanan'];
            $telepon = $_POST['telepon'];
            $alamat = $_POST['alamat'];

            $result = $pasienController->updatePasien($id, $nama, $id_pasien, $jenis_kelamin, $pelayanan, $alamat, $telepon);

            if ($result) {
                echo '<script>window.location.href="index.php";</script>';
                exit;
            } else {
                echo '<script>window.location.href="edit.php";</script>';
                exit;
            }
        }
    } else {
        echo "Pasien tidak ditemukan";
    }
}
?>
</head>

<?php
if ($pasienData)
{
?>

<body>
    <!-- BODY -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Data Pasien</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Data Pasien</a></li>
                    <li class="breadcrumb-item active">Edit Data Pasien</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label"
                                        style="color: #012970; font-weight: bold;">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        value="<?php echo $pasienData['nama']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="id_pasien" class="form-label"
                                        style="color: #012970; font-weight: bold;">ID Pasien</label>
                                    <input type="text" name="id_pasien" class="form-control" id="id_pasien"
                                        value="<?php echo $pasienData['id_pasien']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label"
                                        style="color: #012970; font-weight: bold;">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin"
                                        value="<?php echo $pasienData['jenis_kelamin']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="pelayanan" class="form-label"
                                        style="color: #012970; font-weight: bold;">Pelayanan</label>
                                    <input type="text" name="pelayanan" class="form-control" id="pelayanan"
                                        value="<?php echo $pasienData['pelayanan']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label"
                                        style="color: #012970; font-weight: bold;">Telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="telepon"
                                        value="<?php echo $pasienData['telepon']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label"
                                        style="color: #012970; font-weight: bold;">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat"
                                        rows="3"><?php echo $pasienData['alamat']?></textarea>
                                </div>
                                <div class=" row justify-content-end mt-3">
                                    <div class="col-md-5 text-right mb-2">
                                        <button type="submit" name="submit" class="btn btn-success"><i
                                                class="bi bi-check-circle-fill"></i>
                                            Simpan</button>
                                        <a href="index.php" class="btn btn-secondary"><i class="bi bi-x-circle"></i>
                                            Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
            </form>
            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>
</body>
<?php
}
?>