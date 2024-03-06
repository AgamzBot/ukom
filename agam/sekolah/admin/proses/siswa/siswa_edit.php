<?php
require('proses/logindulu.php');
$id =  $_GET['id'];
$query_select = $koneksi->query( 
"SELECT * FROM db_siswa WHERE id_siswa='$id'"
    );
$hasil = $query_select->fetch_object();
?>
<center>
    <h1>Edit siswa</h1>
    <table width="480px">
        <tr>
            <td>
                <form action="?page=siswa-update" method="post" enctype="multipart/form-data">
                    <input value="<?= $hasil->id_siswa ?>" name="id" type="hidden">
                    <input value="<?= $hasil->nis ?>" class="mt-2" type="text" name="nis" placeholder="Masukkan Nis Siswa">
                    <input value="<?= $hasil->nama_siswa ?>" class=" mt-2 mb-2" type="text" name="nama_siswa" placeholder="Masukkan Nama Siswa">
                    <input value="<?= $hasil->kelas ?>" class="mt-2 mb-2" type="text" name="kelas" placeholder="Masukkan Kelas Siswa">
                    <input value="<?= $hasil->tempat_lahir ?>" class=" mt-2 mb-2" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Siswa">
                    <input value="<?= $hasil->tanggal_lahir ?>" class="mt-2" type="text" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Siswa">
                    <input value="<?= $hasil->jenis_kelamin ?>" class=" mt-2" type="text" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin Siswa">
                    <input value="<?= $hasil->agama ?>" class="mt-2 mb-2" type="text" name="agama" placeholder="Masukkan Agama Siswa">
                    <input value="<?= $hasil->ayah ?>" class="mt-2" type="text" name="ayah" placeholder="Masukkan Ayah Siswa">
                    <input value="<?= $hasil->ibu ?>" class="mt-2" type="text" name="ibu" placeholder="Masukkan Ibu Siswa">
                    <input value="<?= $hasil->pekerjaan_ayah ?>" class=" mt-2 mb-2" type="text" name="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah">
                    <input value="<?= $hasil->pekerjaan_ibu ?>" class="mt-2" type="text" name="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu">
                    <input value="<?= $hasil->alamat ?>" class=" mt-2" type="text" name="alamat" placeholder="Masukkan Alamat Siswa">
                    <button class="btn btn-success mt-2" type="submit" name="simpan">Simpan</button><br><br><br>
                </form>
            </td>
        </tr>
    </table>
</center>