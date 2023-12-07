<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="pnc.png" type="image/png">

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
                            <a class="nav-link" aria-current="page" href="home">Home</a>
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
include_once '../../controllers/DosenController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $matkul = $_POST['matkul'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat, $matkul);

            if ($result) {
                header("location: index.php");
                exit;
            } else {
                header("location: edit.php");
                exit;
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>

<!-- Edit Data Dosen -->
<?php
if ($dosenData)
{
?>
<div class="px-4 py-3">
    <h4><b>Edit Data Dosen</b></h4>
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Data Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Dosen</li>
        </ol>
    </nav>

    <form action="" method="post">
        <table>
            <tr>
                <td style="padding: 10px;">NIDN</td>
                <td style="padding: 10px;"><input type="text" name="nidn" value="<?php echo $dosenData['nidn']; ?>">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Nama</td>
                <td style="padding: 10px;"><input type="text" name="nama" value="<?php echo $dosenData['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Alamat</td>
                <td style="padding: 10px;"><input type="text" name="alamat" value="<?php echo $dosenData['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Matkul</td>
                <td style="padding: 10px;"><input type="text" name="matkul" value="<?php echo $dosenData['matkul']; ?>">
                </td>
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