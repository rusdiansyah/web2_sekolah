<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id     = $_POST['id'];
$nama         = $_POST['nama'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE agama SET nama = '$nama' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: data-agama.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
