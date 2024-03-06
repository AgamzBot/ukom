<?php require('proses/logindulu.php')?>
<h2 class="text-center mt-5">Data Siswa</h2>
<a href="?page=siswa-create">
    <button class="btn btn-success mb-2">+ Tambah</button>
</a>

<table class="table table-striped">
    <tr>
    <th>no</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Pekerjaan ayah</th>
            <th>Pekerjaan ibu</th>
            <th>Alamat</th>
            <th>Action</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query( "SELECT * FROM db_siswa");
    while ($hasil = $query->fetch_object()) :
    ?> 
        <tr>
        <td><?= $no ?></td>
            <td><?= $hasil->nis?></td>
            <td><?= $hasil->nama_siswa ?></td>
            <td><?= $hasil->kelas ?></td>
            <td><?= $hasil->tempat_lahir ?></td>
            <td><?= $hasil->tanggal_lahir ?></td>
            <td><?= $hasil->jenis_kelamin ?></td>
            <td><?= $hasil->agama ?></td>
            <td><?= $hasil->ayah ?></td>
            <td><?= $hasil->ibu ?></td>
            <td><?= $hasil->pekerjaan_ayah?></td>
            <td><?= $hasil->pekerjaan_ibu ?></td>
            <td><?= $hasil->alamat ?></td>
            <td>
                <a href="?page=siswa-edit&id=<?= $hasil->id_siswa ?>" class="btn btn-warning">Edit</a>
                <a href="?page=siswa-hapus&id=<?= $hasil->id_siswa ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;  
    endwhile;
    ?>

</table>