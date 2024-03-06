<?php require('proses/logindulu.php')?>
<h2 class="text-center mt-5">Data Guru</h2>
<a href="?page=guru-create">
    <button class="btn btn-success mb-2">+ Tambah</button>
</a>

<table class="table table-striped shadow">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama </th>
        <th>tempat lahir</th>
        <th>tanggal lahir </th>
        <th>jenis kelamin </th>
        <th>agama </th>
        <th>marital </th>
        <th>alamat</th>
        <th>nama pt </th>
        <th>izajah </th>
        <th>lulus </th>
        <th>golongan </th>
        <th>ket </th>
        <th>jk </th>
        <th>--Action--</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query( "SELECT * FROM guru");
    while ($hasil = $query->fetch_object()) :
    ?> 
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil->NIP ?></td>
            <td><?= $hasil->nama ?></td>
            <td><?= $hasil->tempat_lahir ?></td>
            <td><?= $hasil->tanggal_lahir ?></td>
            <td><?= $hasil->jenis_kelamin ?></td>
            <td><?= $hasil->agama ?></td>
            <td><?= $hasil->marital ?></td>
            <td><?= $hasil->alamat ?></td>
            <td><?= $hasil->nama_pt ?></td>
            <td><?= $hasil->ijazah ?></td>
            <td><?= $hasil->lulus ?></td>
            <td><?= $hasil->golongan ?></td>
            <td><?= $hasil->ket ?></td>
            <td><?= $hasil->Jk ?></td>

            <td>
                <a href="?page=guru-edit&id=<?= $hasil->id_guru ?>" class="btn btn-warning">Edit</a>
                <a href="?page=guru-hapus&id=<?= $hasil->id_guru ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    endwhile;
    ?>

</table>