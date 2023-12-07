<?php

class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function getKoneksi(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
        return $this->koneksi;
    }
}