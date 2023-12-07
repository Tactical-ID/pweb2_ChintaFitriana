<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
$x = "Selamat Belajar PHP";
// echo $x;
// echo strtoupper($x);
// echo strtolower($x);

// angka yang dimasukkan akan menghapus karakter yang ada, misal 20 karakter diinputkan angka 5 maka akan menghapus karakter 5 dari depan
echo substr($x, 0);
?>
</body>

</html>