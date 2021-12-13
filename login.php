<?php
session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($host, "SELECT * FROM register WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['status'] = "login";
	header("location:index_login.php");
}else{
    header("location:index.php?pesan=gagal");
}

?>