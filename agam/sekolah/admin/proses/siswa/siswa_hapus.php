<?php
require('proses/logindulu.php');
$id = $_GET['id'];

$query_hapus = $koneksi->query("DELETE FROM db_siswa WHERE id_siswa='$id'");

if ($query_hapus) {
?>
    <script>
        window.alert('Data Berhasil Dihapus!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Dihapus!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php
}
?>