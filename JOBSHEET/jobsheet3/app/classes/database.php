<?php

class database{
    private $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this -> host, $this ->username, $this->password, $this->db); {
        }
    }

    //method mahasiswa
    function tampil_mahasiswa(){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($nim, $nama, $alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa (nim,nama,alamat) values('$nim', '$nama', '$alamat')"); 
    }

    function edit_mhs($id){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id = '$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update_mhs($id, $nim, $nama, $alamat){
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
    }

    function hapus_mhs($id){
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }

    //method dosen
    function tampil_dosen()
    {
        // Pastikan koneksi ke database telah diatur dengan benar
        $hasil_query = mysqli_query($this->koneksi, "SELECT * FROM dosen");
        
        // Inisialisasi array untuk menyimpan data dosen
        $data_dosen = array();
        
        while ($dosen = mysqli_fetch_assoc($hasil_query)) {
            $data_dosen[] = $dosen;
        }
        return $data_dosen;
    }
    
    function tambah_dosen($nidn, $nama, $alamat) {
        mysqli_query ($this -> koneksi, "insert into dosen (nidn, nama, alamat) values ('$nidn', '$nama', '$alamat')");
    }
    
    function edit_dosen($id){
        $data = mysqli_query($this->koneksi, "select * from dosen where id = '$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_dosen($id, $nidn, $nama, $alamat){
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat' where id='$id'");
    }

    function hapus_dosen($id){
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}