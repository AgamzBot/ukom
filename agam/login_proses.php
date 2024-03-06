<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connection,"SELECT * FROM login WHERE id='$id'");
if($login){
    echo "<script>
                alert('lOGIN SUKSES');
                document.location='beranda.html';
                </script>";
}  else{
    echo "<script>
                alert('Password/Username Salah');
                document.location='login.html';
            </script>";

}
?>