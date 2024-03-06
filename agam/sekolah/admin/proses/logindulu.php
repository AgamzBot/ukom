<?php
if (!isset($_SESSION['login'])) { 
    ?>
    <script>
        window.alert('Anda Harus Login Dulu');
        window.location.href = 'proses/login.php';
    </script>
<?php } ?>













