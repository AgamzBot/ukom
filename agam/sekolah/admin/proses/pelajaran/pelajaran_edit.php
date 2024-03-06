<?php
require('proses/logindulu.php');
$id =  $_GET['id'];
$query_select = $koneksi->query( 
"SELECT * FROM db_pelajaran WHERE id_pelajaran='$id'"
    );
$hasil = $query_select->fetch_object();
?>
<center>
    <h1>Edit pelajaran</h1>
    <table width="480px">
        <tr>
            <td>
                <form action="?page=pelajaran-update" method="post" enctype="multipart/form-data">
                    <input value="<?= $hasil->id_pelajaran ?>" name="id" type="hidden">
                    <input value="<?= $hasil->mata_pelajaran?>" name="mata_pelajaran" type="text" class="form-control mb-3" placeholder="Mata Pelajaran">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>