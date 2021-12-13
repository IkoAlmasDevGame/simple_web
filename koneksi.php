<?php

$host = mysqli_connect("localhost", "root", "", "simple_website");

if($host){
    echo "Database Berhasil";
}else{
    echo "Database Gagal";
}

?>