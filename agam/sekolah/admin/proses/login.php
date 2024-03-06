<?php
include('../../config/koneksi.php');
session_start();

if (isset($_SESSION['login'])) { 
        ?>
        <script>
            window.location.href = '../index.php?page=home';
        </script>
    <?php } 

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $koneksi->query("SELECT * FROM user WHERE username = '$username'");    

    if (mysqli_num_rows($query) > 0) {

        $result = $query->fetch_object();
        if (password_verify($password, $result->password)) {
            $_SESSION['login'] = 'success';
            $_SESSION['id_user'] = $result->id_user;
?>
            <script>
                window.alert('Login Berhasil !!');
                window.location.href = '../index.php?page=home';
            </script>
        <?php
        } else {
        ?>
            <script>
                window.alert('Password Salah !!');
                window.location.href = 'login.php';
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            window.alert('Login Gagal ! Akun Salah!');
            window.location.href = 'login.php';
        </script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <form action="" method="post" class="rounded  px-3 py-3" style="margin-top:200px;">
                    <table width="100%">
                        <tr>   
                            <h2 class="text-center text-dark"><strong>Login</strong> </h2>
                        
                            <td>
                                <input type="text" placeholder="username" name="username" class="form-control text-center mb-3">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" placeholder="password" name="password" class="form-control text-center mb-3">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <p class="text-center text-danger"><strong>Belum Punya Akun? <a href="register.php">Register</a></strong></p>

    </div>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>