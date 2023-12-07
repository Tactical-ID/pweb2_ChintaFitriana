<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>

    <!-- contoh dari video / statis-->
    <h4>STATIS</h4>
    <?php
    $x = 0;
    echo "Nilai X = $x <br><br>";
    if ($x > 0) {
        echo "$x adalah Bilangan Positif";
    } elseif ($x < 0) {
        echo "$x adalah Bilangan Negatif";
    } else {
        echo "$x adalah Bilangan Nol";
    }
    ?>
    <!-- merubah menjadi nilai dinamis> type text -->
    <h4>DINAMIS</h4>
    <form method="post">
        Masukkan nilai X: <input type="text" name="x">
        <input type="submit" value="Cek">
    </form>

    <!-- method POST -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari input
        $x = $_POST["x"];
        echo "Nilai X = $x <br><br>";

        // Menampilkan Output
        if ($x >= 80) {
            echo "$x adalah Nilai A";
        } else {
            echo "$x  adalah Nilai B";
        } 
    }
    ?>
</body>

</html>