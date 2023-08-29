<html>
    <head>
       
    </head>
    <body>
        <title>LOGIN MENGGUNAKAN SESSION</title>
        <h3>Silahkan untuk login</h3>

        <?php
        // if(isset($_GET['pesan'])){
        //     if($_GET['pesan'] == "gagal" ){
        //         echo "Login Gagal! user dan pass salah";
        //     }else if ($_GET['pesan'] == "logout"){
        //         echo "anda telah berhasil logout"
        //     }else if ($_GET['pesan'] == "belum_login"){
        //         echo "anda harus login untuk mengakses halaman ini"
        //     }
        // }
        ?> 
        <form action="proses_regis.php" method="post">
            <div>
                <label for="">Username</label>
                <input type="text" name="user">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap">
            </div>
            <div>
                <input type="submit" value="Masuk" name="login">
            </div>
        </form>
    </body>
</html>