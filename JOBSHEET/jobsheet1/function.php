<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <h4>
        STATIS
    </h4>
    <?php
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }
    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }
    echo "Luas Persegi Panjang = " . persegi_panjang(5, 2) . "<br>";
    echo "Luas Lingkaran = " . lingkaran(7) . "<br>";
    ?>

    <h4>DINAMIS</h4>
    <form method="post">
        <select name="bentuk" onchange="this.form.submit()">
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bentuk = $_POST["bentuk"];
        if ($bentuk === "persegi_panjang") {
            ?>
    <form method="post">
        Masukkan Panjang: <input type="text" name="panjang">
        Masukkan Lebar: <input type="text" name="lebar">
        <input type="submit" value="Hitung">
    </form>
    <?php
            // Menampilkan nilai dari input
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];
            echo "Nilai Panjang = $panjang <br>";
            echo "Nilai Lebar = $lebar <br><br>";
        } elseif ($bentuk === "lingkaran") {
            ?>
    <form method="post">
        Masukkan Jari-jari: <input type="text" name="jari_jari">
        <input type="submit" value="Hitung">
    </form>
    <?php
            // Menampilkan nilai dari input
            $jari_jari = $_POST["jari_jari"];
            echo "Nilai Jari-jari = $jari_jari <br><br>";
        }
    }

    if (isset($_POST["bentuk"])) {
        $bentuk = $_POST["bentuk"];
        if ($bentuk === "persegi_panjang") {
            // Menghitung luas persegi panjang
            $luas = persegi_panjang($panjang, $lebar);
            echo "Luas Persegi Panjang = $luas";
        } elseif ($bentuk === "lingkaran") {
            // Menghitung luas lingkaran
            $luas = lingkaran($jari_jari);
            echo "Luas Lingkaran = $luas";
        }
    }
    ?>
</body>

</html>