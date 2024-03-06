<?php
include('../../config/koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = $koneksi->query("INSERT INTO user VALUES('', '$username','$password')");

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
                <form action="" method="post" class="rounded bg-light px-3 py-3" style="margin-top:200px;">
                    <table width="100%">
                        <tr>   
                            <h2 class="text-center text-light"><strong>Register</strong> </h2>
                        
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
                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <p class="text-center text-danger"><strong></strong></p>

    </div>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>