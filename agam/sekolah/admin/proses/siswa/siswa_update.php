<?php
require('proses/logindulu.php');
$id = $_POST['id'];
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

$query_update = $koneksi->query("UPDATE db_siswa SET 
                                            nis='$nis',
                                            nama_siswa='$nama_siswa',
                                            kelas='$kelas',
                                            tempat_lahir='$tempat_lahir',
                                            tanggal_lahir='$tanggal_lahir',
                                            jenis_kelamin='$jenis_kelamin',
                                            agama='$agama',
                                            ayah='$ayah',
                                            ibu='$ibu',
                                            pekerjaan_ayah='$pekerjaan_ayah',
                                            pekerjaan_ibu='$pekerjaan_ibu',
                                            alamat='$alamat'
                                            WHERE id_siswa='$id'
                                            ");
if ($query_update) {
?>
    <script>
        window.alert('Data Berhasil Diedit!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Diedit!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php } ?>