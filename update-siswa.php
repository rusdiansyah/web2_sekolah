<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id     = $_POST['id'];
$nisn         = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa       = trim($_POST['alamat_siswa']);

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_siswa = '$nama_siswa', alamat_siswa = '$alamat_siswa' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
