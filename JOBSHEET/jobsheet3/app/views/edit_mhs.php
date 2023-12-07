<?php
include '../classes/database.php';

$db = new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
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

<!-- EDIT DATA MAHASISWA -->
<div class="px-4 py-3">
    <h3>Edit Data Mahasiswa</h3>
    <form action="proses_mhs.php?aksi=update" method="post">

        <?php
foreach($db->edit_mhs($_GET['id']) as $d){
    ?>
        <table>
            <tr>
                <td style="padding: 10px;">NIM</td>
                <td style="padding: 10px;">
                    <input type="hidden" name="id" value="<?php echo $d['id']?>">
                    <input type="text" name="nim" value="<?php echo $d['nim']?>">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Nama</td>
                <td style="padding: 10px;"><input type="text" name="nama" cols="22" rows="5"
                        value="<?php echo $d['nama'] ?>"></td>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Alamat</td>
                <td style="padding: 10px;">
                    <textarea name="alamat" cols="20" rows="5"><?php echo $d['alamat']?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding: 10px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <input type="submit" value="Simpan" class="btn btn-success" style="flex: 1;">
                        <a href="tampil_mhs.php" style="padding: 10px; flex: 1;">
                            <input type="submit" value="Batal" class="btn btn-secondary" style="width: 100%;">
                        </a>
                    </div>
                </td>
            </tr>
        </table>
        <?php
    }
    ?>
    </form>
</div>