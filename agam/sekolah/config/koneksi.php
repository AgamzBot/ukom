<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_sekolah';

    $koneksi = new mysqli($server,$username,$password,$database);
    if ($koneksi->connect_error) {
        die("Koneksi Gagal!!!!".$koneksi->connect_error);
    }
?>