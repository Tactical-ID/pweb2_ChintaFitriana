<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <?php
    //membuat class
    class mahasiswa {
        var $nim;
        var $nama;
        var $alamat;

        //method untuk menampilkan nama
        function tampil_nama(){
            return $this->nama;
        }

        //method untuk menampilkan alamat
        function tampil_alamat(){
            return $this->alamat;
        }
    }

    //membuat objek nama mahasiswa
    $mahasiswa = new mahasiswa();
    
    // Mengisi atribut pada objek
    $mahasiswa->nama = "Roronoa Zoro";
    $mahasiswa->alamat = "Wanokuni";
    
    //menampilkan objek ke layar
    echo "Nama Mahasiswa: " . $mahasiswa->tampil_nama();
    echo "<br>";
    echo "Alamat Mahasiswa: " . $mahasiswa->tampil_alamat();
    echo "<br>";
    ?>

</body>

</html>