<?php
require('proses/logindulu.php');
$id =  $_GET['id'];
$query_select = $koneksi->query( 
"SELECT * FROM db_guru WHERE id_guru='$id'"
    );
$hasil = $query_select->fetch_object();
?>
<center>
    <h1>Edit guru</h1>
    <table width="480px">
        <tr>
            <td>
                <form action="?page=guru-update" method="post" enctype="multipart/form-data">
                    <input value="<?= $hasil->id_guru ?>" name="id" type="hidden">
                    <input value="<?= $hasil->nama_guru ?>" name="nama_guru" type="text" class="form-control mb-3" placeholder="Nama guru">
                    <input value="<?= $hasil->jabatan ?>" name="jabatan" type="text" class="form-control mb-3" placeholder="Jabatan">
                    <input value="<?= $hasil->guru_mapel?>" name="guru_mapel" type="text" class="form-control mb-3" placeholder="Guru Mata Pelajaran">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>