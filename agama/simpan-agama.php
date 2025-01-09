<?php
include('../koneksi.php');
$nama = str_replace("'","",$_POST['nama']);


$query = "INSERT INTO agama (nama) VALUES ('$nama')";

if ($connection->query($query)) {
    header("location: data-agama.php");
    // echo "Data Berhasil Disimpan";
} else {
    echo "Data Gagal Disimpan";
}
