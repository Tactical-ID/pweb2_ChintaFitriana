<?php
//memanggil class database
include "../classes/database.php";

//instansiasi class database
$db = new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<!-- NAVBAR -->
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tampil_dosen.php">Dosen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<!-- Data Dosen -->
<div class="px-4 py-3">
    <h3>Data Dosen</h3>
    <a href="tambah_dosen.php" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Dosen</a> <br>
    <table border="1" style="width: 80%;" class="table table-striped">
        <tr>
            <th style="width: 10%;">No</th>
            <th style="width: 15%;">NIDN</th>
            <th style="width: 30%;">Nama</th>
            <th style="width: 30%;">Alamat</th>
            <th style="width: 20%;">Aksi</th>
        </tr>
        <?php
    $no = 1;
    foreach ($db->tampil_dosen() as $d) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['nidn'] ?></td>
            <td><?php echo $d['nama'] ?></td>
            <td><?php echo $d['alamat'] ?></td>
            <td>
                <a href="edit_dosen.php?id=<?php echo $d['id']; ?>&aksi=edit_dosen" class="btn btn-info">Edit</a>
                <a href="proses_dosen.php?id=<?php echo $d['id']; ?>&aksi=hapus_dosen" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</div>
</table>