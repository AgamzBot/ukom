<?php
require('proses/logindulu.php');
$hari = $_POST['hari'];
$mata_pelajaran = $_POST['mata_pelajaran'];

$query = $koneksi->query("INSERT INTO db_jadwal VALUES('', '$hari', '$mata_pelajaran')");
if ($query) {
?>
    <script>
        window.alert('Data Berhasil Disimpan!!');
        window.location.href = 'index.php?page=jadwal';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Disimpan!!');
        window.location.href = 'index.php?page=jadwal-create';
    </script>
<?php

}
?>