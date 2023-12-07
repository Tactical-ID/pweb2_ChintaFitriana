<!-- linkrel bootstrap  -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Mahasiswa</title>
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

<!-- Tambah Data Mahasiswa -->
<div class="px-4 py-3">
    <h4>Tambah Data Mahasiswa</h4>
    <form action="proses_mhs.php?aksi=tambah" method="post">
        <table>
            <tr>
                <td style="padding: 10px;">NIM</td>
                <td style="padding: 10px;"><input type="text" name="nim" cols="22" rows="5"></td>
            </tr>
            <tr>
                <td style="padding: 10px;">Nama</td>
                <td style="padding: 10px;"><input type="text" name="nama" cols="22" rows="5"></td>
            </tr>
            <tr>
                <td style="padding: 10px;">Alamat</td>
                <td style="padding: 10px;">
                    <textarea name="alamat" cols="20" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding: 10px;"><input type="submit" value="Simpan" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>