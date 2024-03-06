<?php require('proses/logindulu.php');
?>
<center>
    <h3 class="mt-5">Input Data pelajaran</h3>
    <table width="80%" class="mt-4">
        <tr>
            <td>
                <form action="?page=pelajaran-store" method="post">
                    <input class="form-control form-control-lg mt-2 mb-2" type="text" name="mata_pelajaran" placeholder="Masukkan M Pelajaran">
                    <button class="btn btn-success mt-2" type="submit" name="simpan">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>