<?php
include 'conn.php';

$user = $_POST['user'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

$query = mysqli_query($host,"insert into user values('','$user','$password','$nama_lengkap','admin')");

if($query){
    echo "Anda telah berhasil daftar";
}else{
    echo "anda gagal daftar, silahkan coba lagy";
};

?>