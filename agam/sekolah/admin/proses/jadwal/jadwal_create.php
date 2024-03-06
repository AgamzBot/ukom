<?php require('proses/logindulu.php');
?>
<center>
    <h3 class="mt-5">Input Data jadwal</h3>
    <table width="80%" class="mt-4">
        <tr>
            <td>
                <form action="?page=jadwal-store" method="post" enctype="multipart/form-data">
                    <input class="form-control form-control-lg mt-2 mb-2" type="text" name="hari" placeholder="Masukkan Hari">
                    <input class="form-control form-control-lg mt-2" type="text" name="mata_pelajaran" placeholder="Masukkan Jadwal Mata Pelajaran">
                    <button class="btn btn-success mt-2" type="submit" name="simpan">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>