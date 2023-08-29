<?php

session_start();

include 'conn.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$data = mysqli_query($host, "select * from user where username='$user' and password='$pass' ");

while($split = mysqli_fetch_array($data)){
    $role = $split['role']
}

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("location:./admin/index.php");  
};

?>