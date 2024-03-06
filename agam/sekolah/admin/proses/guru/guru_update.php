<?php
require('proses/logindulu.php');
$id = $_POST['id'];
$nama_guru = $_POST['nama_guru'];
$jabatan = $_POST['jabatan'];
$guru_mapel = $_POST['guru_mapel'];

$query_update = $koneksi->query("UPDATE db_guru SET 
                                            nama_guru='$nama_guru',
                                            jabatan='$jabatan',
                                            guru_mapel='$guru_mapel'
                                            WHERE id_guru='$id'
                                            ");
if ($query_update) {
?>
    <script>
        window.alert('Data Berhasil Diedit!!');
        window.location.href = 'index.php?page=guru';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Diedit!!');
        window.location.href = 'index.php?page=guru';
    </script>
<?php } ?>