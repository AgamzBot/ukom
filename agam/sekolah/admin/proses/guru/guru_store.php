<?php
require('proses/logindulu.php');
$NIP=$_POST['NIP'];
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

$query = $koneksi->query("INSERT INTO db_guru VALUES('', '$nama_guru', '$jabatan','$guru_mapel')");
if ($query) {
?>
    <script>
        window.alert('Data Berhasil Disimpan!!');
        window.location.href = 'index.php?page=guru';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Disimpan!!');
        window.location.href = 'index.php?page=guru-create';
    </script>
<?php

}
?>