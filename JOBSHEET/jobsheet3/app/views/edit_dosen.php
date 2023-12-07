<?php
include '../classes/database.php';
$db = new database();
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

<!-- EDIT DATA DOSEN -->
<div class="px-4 py-3">
    <h3>Edit Data Dosen</h3>
    <form action="proses_dosen.php?aksi=update_dosen" method="post">
        <?php
foreach($db->edit_dosen($_GET['id']) as $d){
    
    ?>
        <div class="form-group" style="padding: 10px;">
            <label for="input nidn" style="padding: 10px;">NIDN</label>
            <input type="text" class="form-control" placeholder="Masukkan Nomor NIDN" name="nidn" maxlength="30"
                style="width: 300px;" value="<?php echo $d['nidn']?>"><input type="hidden" name="id"
                value="<?php echo $d['id']?>">
        </div>

        <div class="form-group" style="padding: 10px;">
            <label for="input nama" style="padding: 5px;">Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Dosen" name="nama" maxlength="30"
                style="width: 300px;" value="<?php echo $d['nama']?>">
        </div>
        <div class="form-group" style="padding: 10px;">
            <label for="input alamat" style="padding: 5px;">Alamat</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Alamat" name="alamat" maxlength="30"
                style="width: 300px;" value="<?php echo $d['alamat']?>">
        </div>

        <table>
            <tr>
                <td></td>
                <td style="padding: 10px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <input type="submit" value="Simpan" class="btn btn-success" style="flex: 1;">
                        <a href="tampil_dosen.php" style="padding: 10px; flex: 1;">
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