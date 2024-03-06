<?php
session_start();
include("../config/koneksi.php");
require('proses/logindulu.php');

if (!isset($_GET["page"])) {
    ?>
    <script>
        window.location.href = '?page=home';
    </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <title>Sekolah</title>
</head>
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    th {
        text-align: center;
        font-size: 20px;
    }

    li {
        font-size: 20px;
    }

    td {
        text-align: center;
    }
</style>

<body class="bg-secondary">
    <div class="container-fluid bg-light" style="min-height: 100vh;">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2 bg-dark text-light" style="font-weight:700;">SMKN 5 KOTA BEKASI</h1>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link <?= $_GET['page'] == 'home' ? 'active' : '' ?>" href="?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $_GET['page'] == 'pelajaran' ? 'active' : '' ?>" href="?page=pelajaran">Mata Pelajaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $_GET['page'] == 'jadwal' ? 'active' : '' ?>" href="?page=jadwal">Jadwal Pelajaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $_GET['page'] == 'siswa' ? 'active' : '' ?>" href="?page=siswa">Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $_GET['page'] == 'guru' ? 'active' : '' ?>" href="?page=guru">Data Guru</a>
                            </li>
                    </ul>

                    <a class="btn btn-outline-danger ms-auto" href="?page=logout">Logout</a>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col">
                <?php
                if ($_GET) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'home':
                                include('proses/home/home.php');
                                break;
                            case 'logout':
                                include('proses/logout.php');
                                break;

                            case 'siswa':
                                include('proses/siswa/siswa.php');
                                break;
                            case 'siswa-create':
                                include('proses/siswa/siswa_create.php');
                                break;
                            case 'siswa-store':
                                include('proses/siswa/siswa_store.php');
                                break;
                            case 'siswa-edit':
                                include('proses/siswa/siswa_edit.php');
                                break;
                            case 'siswa-update':
                                include('proses/siswa/siswa_update.php');
                                break;
                            case 'siswa-hapus':
                                include('proses/siswa/siswa_hapus.php');
                                break;
                                case 'siswa':
                                include('proses/siswa/siswa.php');
                                break;

                                case 'guru-create':
                                    include('proses/guru/guru_create.php');
                                    break;
                                case 'guru-store':
                                    include('proses/guru/guru_store.php');
                                    break;
                                case 'guru-edit':
                                    include('proses/guru/guru_edit.php');
                                    break;
                                case 'guru-update':
                                    include('proses/guru/guru_update.php');
                                    break;
                                case 'guru-hapus':
                                    include('proses/guru/guru_hapus.php');
                                    break;
                                case 'guru':
                                    include('proses/guru/guru.php');
                                    break;

                                    case 'pelajaran-create':
                                        include('proses/pelajaran/pelajaran_create.php');
                                        break;
                                    case 'pelajaran-store':
                                        include('proses/pelajaran/pelajaran_store.php');
                                        break;
                                    case 'pelajaran-edit':
                                        include('proses/pelajaran/pelajaran_edit.php');
                                        break;
                                    case 'pelajaran-update':
                                        include('proses/pelajaran/pelajaran_update.php');
                                        break;
                                    case 'pelajaran-hapus':
                                        include('proses/pelajaran/pelajaran_hapus.php');
                                        break;
                                    case 'pelajaran':
                                        include('proses/pelajaran/pelajaran.php');
                                        break;

                                        case 'jadwal-create':
                                            include('proses/jadwal/jadwal_create.php');
                                            break;
                                        case 'jadwal-store':
                                            include('proses/jadwal/jadwal_store.php');
                                            break;
                                        case 'jadwal-edit':
                                            include('proses/jadwal/jadwal_edit.php');
                                            break;
                                        case 'jadwal-update':
                                            include('proses/jadwal/jadwal_update.php');
                                            break;
                                        case 'jadwal-hapus':
                                            include('proses/jadwal/jadwal_hapus.php');
                                            break;
                                        case 'jadwal':
                                            include('proses/jadwal/jadwal.php');
                                            break;
                                            case 'nilai-create':
                                                include('proses/nilai/nilai_create.php');
                                                break;
                                            case 'nilai-store':
                                                include('proses/nilai/nilai_store.php');
                                                break;
                                            case 'nilai-edit':
                                                include('proses/nilai/nilai_edit.php');
                                                break;
                                            case 'nilai-update':
                                                include('proses/nilai/nilai_update.php');
                                                break;
                                            case 'nilai-hapus':
                                                include('proses/nilai/nilai_hapus.php');
                                                break;
                                            case 'nilai':
                                                include('proses/nilai/nilai.php');
                                                break;
        

                            default:
                                include('proses/home/home.php');
                                break;
                        }
                    } else {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'home':
                                include('proses/home/home.php');
                                break;
                            case 'logout':
                                include('proses/logout.php');
                                break;

                            default:
                                include('proses/home/home.php');
                                break;
                        }
                    }
            
                ?>
            </div>
        </div>
        <div class="row fixed-bottom">
            <div class="col text-center bg-light">
                <p class="mt-1 mb-1 fs-6 p-1">
                    copyright &copy; Agam Maulana - <?= date('Y'); ?>
                </p>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>