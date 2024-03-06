<?php require('proses/logindulu.php')?>
<h2 class="text-center mt-5">Jadwal Pelajaran</h2>
<a href="?page=jadwal-create">
    <button class="btn btn-success mb-2">+ Tambah</button>
</a>

<table class="table table-striped shadow">
    <tr>
        <th>No</th>
        <th>Hari</th>
        <th>Jadwal Mata Pelajaran</th>
        <th>--Action--</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query( "SELECT * FROM db_jadwal");
    while ($hasil = $query->fetch_object()) :
    ?> 
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil->hari ?></td>
            <td><?= $hasil->mata_pelajaran?></td>
            <td>
                <a href="?page=jadwal-edit&id=<?= $hasil->id_jadwal ?>" class="btn btn-warning">Edit</a>
                <a href="?page=jadwal-hapus&id=<?= $hasil->id_jadwal ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    endwhile;
    ?>

</table>