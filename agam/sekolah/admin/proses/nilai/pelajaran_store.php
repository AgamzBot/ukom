<?php
require('proses/logindulu.php');
$mata_pelajaran = $_POST['mata_pelajaran'];

$query = $koneksi->query("INSERT INTO db_pelajaran VALUES('', '$mata_pelajaran')");
if ($query) {
?>
    <script>
        window.alert('Data Berhasil Disimpan!!');
        window.location.href = 'index.php?page=pelajaran';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Disimpan!!');
        window.location.href = 'index.php?page=pelajaran-create';
    </script>
<?php

}
?>