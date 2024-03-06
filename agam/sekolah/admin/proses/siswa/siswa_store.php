<?php
require('proses/logindulu.php');
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$kelas=$_POST['kelas'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$ayah=$_POST['ayah'];
$ibu=$_POST['ibu'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
$alamat=$_POST['alamat'];

$query = $koneksi->query("INSERT INTO db_siswa VALUES('','$nis', '$nama_siswa', '$kelas', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$ayah', '$ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$alamat')");
    if ($query) {
    ?>
        <script>
            window.alert('Data Berhasil Disimpan!!');
            window.location.href = 'index.php?page=siswa';
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert('Data Gagal Disimpan!!');
            window.location.href = 'index.php?page=siswa-create';
        </script>
    <?php

    }
?>