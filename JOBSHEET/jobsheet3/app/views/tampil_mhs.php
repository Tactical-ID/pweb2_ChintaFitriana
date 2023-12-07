<?php
//memanggil class database
include "../classes/database.php";

//instansiasi class database
$db = new database;
?>

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

            <!-- Element yang ingin dipindahkan ke sebelah kanan -->
            <div class="ms-auto">
                <!-- Isi elemen ini sesuai dengan yang Anda butuhkan -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tampil_dosen.php">Dosen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
</nav>
</div>

<div class="px-4 py-3">
    <h3>Data Mahasiswa</h3>
    <a href="tambah_mhs.php" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Mahasiswa</a> <br>
    <table border="1" style="width: 80%;" class="table table-striped">
        <tr>
            <th style="width: 10%;">No</th>
            <th style="width: 15%;">NIM</th>
            <th style="width: 30%;">Nama</th>
            <th style="width: 30%;">Alamat</th>
            <th style="width: 20%;">Aksi</th>
        </tr>
        <?php
    $no = 1;
    foreach ($db->tampil_mahasiswa() as $d) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['nim'] ?></td>
            <td><?php echo $d['nama'] ?></td>
            <td><?php echo $d['alamat'] ?></td>
            <td>
                <a class="btn btn-info" href="edit_mhs.php?id=<?php echo $d['id']; ?>&aksi=edit_mhs">Edit</a>
                <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $d['id']; ?>&aksi=hapus_mhs">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</div>

</table>