<?php require('proses/logindulu.php')?>

<h2 class="text-center mt-5">Mata Pelajaran</h2>
<a href="?page=pelajaran-create">
    <button class="btn btn-success mb-2">+ Tambah</button>
</a>

<table class="table table-striped shadow">
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>--Action--</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query( "SELECT * FROM db_pelajaran");
    while ($hasil = $query->fetch_object()) :
    ?> 
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil->mata_pelajaran ?></td>
            <td>
                <a href="?page=pelajaran-edit&id=<?= $hasil->id_pelajaran ?>" class="btn btn-warning">Edit</a>
                <a href="?page=pelajaran-hapus&id=<?= $hasil->id_pelajaran ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    endwhile;
    ?>

</table>
