<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-4 py-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>SIDOMA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="ms-auto">
                <!-- Isi elemen ini sesuai dengan yang Anda butuhkan -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mahasiswa">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dosen/index.php">Dosen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
</nav>
</div>

<?php
// memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

// instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa=$mahasiswaController->getAllMahasiswa();
?>

<div class="px-4 py-3">
    <h4><b>Data Mahasiswa</b></h4>
    <a href="tambah.php" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Mahasiswa</a> <br>
    <table border="1" style="width: 80%;" class="table table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
    $no = 1;
    foreach ($mahasiswa as $x) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tempat_lahir'] ?></td>
            <td><?php echo $x['jenis_kelamin'] ?></td>
            <td><?php echo $x['agama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit.php?id=<?php echo $x['id']; ?>">Edit</a>
                <a class=" btn btn-danger" href="hapus.php?id=<?php echo $x['id']; ?>"
                    onclick="return confirm('Apakah yakin akan menghapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</div>

</table>