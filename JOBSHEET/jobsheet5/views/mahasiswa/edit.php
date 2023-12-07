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
                            <a class="nav-link" href="#">Dosen</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
</nav>
</div>

<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location: index.php");
                exit;
            } else {
                header("location: edit.php");
                exit;
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<!-- Edit Data Mahasiswa -->
<?php
if ($mahasiswaData)
{
?>
<div class="px-4 py-3">
    <h4><b>Edit Data Mahasiswa</b></h4>
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
        </ol>
    </nav>
    <form action="" method="post">
        <table>
            <tr>
                <td style="padding: 10px;">NIM</td>
                <td style="padding: 10px;"><input type="text" name="nim" value="<?php echo $mahasiswaData['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Nama</td>
                <td style="padding: 10px;"><input type="text" name="nama" value="<?php echo $mahasiswaData['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Tempat Lahir</td>
                <td style="padding: 10px;"><input type="text" name="tempat_lahir"
                        value="<?php echo $mahasiswaData['tempat_lahir']; ?>"></td>
            </tr>
            <tr>
                <td style="padding: 10px;">Jenis Kelamin</td>
                <td style="padding: 10px;">
                    <select name="jenis_kelamin">
                        <option value="Laki-laki"
                            <?php if ($mahasiswaData['jenis_kelamin'] === 'Laki-laki') echo 'selected'; ?>>Laki-laki
                        </option>
                        <option value="Perempuan"
                            <?php if ($mahasiswaData['jenis_kelamin'] === 'Perempuan') echo 'selected'; ?>>Perempuan
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Agama</td>
                <td style="padding: 10px;">
                    <select name="agama">
                        <option value="Islam" <?php if ($mahasiswaData['agama'] === 'Islam') echo 'selected'; ?>>Islam
                        </option>
                        <option value="Kristen" <?php if ($mahasiswaData['agama'] === 'Kristen') echo 'selected'; ?>>
                            Kristen</option>
                        <option value="Katolik" <?php if ($mahasiswaData['agama'] === 'Katolik') echo 'selected'; ?>>
                            Katolik</option>
                        <option value="Hindu" <?php if ($mahasiswaData['agama'] === 'Hindu') echo 'selected'; ?>>Hindu
                        </option>
                        <option value="Budha" <?php if ($mahasiswaData['agama'] === 'Budha') echo 'selected'; ?>>Budha
                        </option>
                        <option value="Konghucu" <?php if ($mahasiswaData['agama'] === 'Konghucu') echo 'selected'; ?>>
                            Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Alamat</td>
                <td style="padding: 10px;"><textarea name="alamat" cols="20"
                        rows="5"><?php echo $mahasiswaData['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding: 10px;"><input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php    
}
?>