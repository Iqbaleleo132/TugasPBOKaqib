<html>
    <head>
        <title>Halaman User</title>
    </head>
    <body>
        <h2>Halaman User</h2>

        <?php
        session_start();
        if($_SESSION['status'] != "login"){
            header("location: ../index.php?pesan=belum_login");
        }
        ?>

    <h4>Selamat Datang Admin</h4>

    </body>
</html>