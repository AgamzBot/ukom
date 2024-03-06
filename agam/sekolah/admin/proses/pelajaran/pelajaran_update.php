<?php
require('proses/logindulu.php');
$id = $_POST['id'];
$mata_pelajaran = $_POST['mata_pelajaran'];

$query_update = $koneksi->query("UPDATE db_pelajaran SET 
                                            mata_pelajaran='$mata_pelajaran'
                                            WHERE id_pelajaran='$id'
                                            ");
if ($query_update) {
?>
    <script>
        window.alert('Data Berhasil Diedit!!');
        window.location.href = 'index.php?page=pelajaran';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Diedit!!');
        window.location.href = 'index.php?page=pelajaran';
    </script>
<?php } ?>