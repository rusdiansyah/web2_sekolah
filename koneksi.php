<?php
$db_host = "localhost";
$db_user = "user";
$db_pass = "P@55w0rd";
$db_name = "db_sekolah";

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if($connection) {
    // echo "Koneksi Berhasil";
}else{
    echo "Koneksi Gagal : ".mysqli_connect_error(); 
}
?>