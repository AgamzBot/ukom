<?php
require('proses/logindulu.php');
$id = $_POST['id'];
$hari = $_POST['hari'];
$mata_pelajaran = $_POST['mata_pelajaran'];

$query_update = $koneksi->query("UPDATE db_jadwal SET 
                                            hari='$hari',
                                            mata_pelajaran='$mata_pelajaran'
                                            WHERE id_jadwal='$id'
                                            ");
if ($query_update) {
?>
    <script>
        window.alert('Data Berhasil Diedit!!');
        window.location.href = 'index.php?page=jadwal';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Diedit!!');
        window.location.href = 'index.php?page=jadwal';
    </script>
<?php } ?>