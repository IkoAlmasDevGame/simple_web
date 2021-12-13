<?php
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$jeniskelamin = $_POST['jeniskelamin'];
$datebirth = $_POST['datebirth'];

mysqli_query($host, "INSERT INTO register VALUES ('', '$email', '$password', '$repassword', '$jeniskelamin', '$datebirth')");

header("location:index.php?pesan=input");

if($password == $repassword < 8){
    $repassword = $_SESSION['repassword'];
    $password = $_SESSION['password'];
    echo "password belum kuat";
}else if ($password == $repassword > 16) {
    echo "password sangat kuat";
}else{
    echo "password gampang terbongkar";
}
?>