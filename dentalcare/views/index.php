<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien - Dental Care</title>
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

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
include_once '../../config.php';
include_once '../../controllers/PasienController.php';
require '../../component/header.html';
require '../../component/sidebar.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$pasienController = new PasienController($db);
$pasien = $pasienController -> getAllPasien();

?>

<body>
    <!-- BODY -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Pasien</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Pasien</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-end">
                <a href="tambah.php" class="btn btn-primary me-2">
                    <i class="bi bi-plus-square-fill"></i> Tambah Data
                </a>
                <button onclick="exportToPDF()" class="btn btn-warning">
                    <i class="bi bi-file-pdf"></i> Export to PDF
                </button>
            </div>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-primary">
                            <tr class="text-center">
                                <th style="color: #012970;">No</th>
                                <th style="color: #012970;">Nama</th>
                                <th style="color: #012970;">ID Pasien</th>
                                <th style="color: #012970;">Jenis Kelamin</th>
                                <th style="color: #012970;">Pelayanan</th>
                                <th style="color: #012970;">Telepon</th>
                                <th style="color: #012970;">Alamat</th>
                                <th style="color: #012970;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no=1;
                        foreach ($pasien as $x) {
                        ?>
                            <tr>
                                <td class=" text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $x['nama'] ?></td>
                                <td class="text-center"><?php echo $x['id_pasien'] ?></td>
                                <td class="text-center"><?php echo $x['jenis_kelamin'] ?></td>
                                <td class="text-center"><?php echo $x['pelayanan'] ?></td>
                                <td class="text-center"><?php echo $x['telepon'] ?></td>
                                <td class="text-center"><?php echo $x['alamat'] ?></td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="edit.php?id=<?php echo $x['id']; ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="btn btn-danger" href="#" onclick="confirmDelete(<?php echo $x['id']; ?>)">
                                        <i class="bi bi-trash bi-sm"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
        }
        ?>
                        </tbody>
                    </table>
                </div>
        </section>
    </main>
    <!-- Script JS SWEET ALERT-->
    <script>
    function confirmDelete(id) {
        // Function Alert
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data Pasien akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Menggunakan fetch API untuk menghapus data pasien
                fetch(`hapus.php?id=${id}`, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Menampilkan Sweet Alert setelah data terhapus
                        Swal.fire({
                            title: 'Sukses',
                            text: 'Data Pasien berhasil dihapus!',
                            icon: 'success'
                        }).then(() => {
                            // Redirect ke halaman utama setelah menekan tombol OK pada Sweet Alert
                            window.location.href = 'index.php';
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat menghapus data!',
                            icon: 'error'
                        });
                    });
            }
        });
    }
    </script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>