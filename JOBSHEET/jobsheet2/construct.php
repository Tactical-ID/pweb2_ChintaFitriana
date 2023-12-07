<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
</head>

<body>
    <?php
    //membuat class
    class mahasiswa {
        var $nim;
        var $nama;
        var $alamat;

function __construct(){
    echo "Saya Mahasiswa Teknik Informatika <br>";
}

function __destruct(){
    echo "Politeknik Negeri Cilacap";
}
        
        //method untuk menampilkan nama
        function tampil_nama(){
            return "Nama Saya Chinta Fitriana";
        }

        //method untuk menampilkan alamat
        function tampil_alamat(){
            return "Kemranjen, Banyumas";
        }
        
        //method untuk menampilkan mahasiswa
        function tampil_mahasiswa(){
            return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
        }
    }

    //membuat objek
    $mahasiswa = new mahasiswa();

    //menampilkan objek di layar
    echo $mahasiswa->tampil_nama();
    echo "<br>";
    echo $mahasiswa->tampil_alamat();
    echo "<br>";
    echo $mahasiswa->tampil_mahasiswa();
    echo "<br>";
    ?>
</body>

</html>