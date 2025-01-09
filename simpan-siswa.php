<?php
include('koneksi.php');
$nisn = str_replace("'","",$_POST['nisn']);
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];

$query = "INSERT INTO tbl_siswa (nisn,nama_siswa,alamat_siswa) VALUES ('$nisn','$nama_siswa','$alamat_siswa')";

if ($connection->query($query)) {
    header("location: data-siswa.php");
    // echo "Data Berhasil Disimpan";
} else {
    echo "Data Gagal Disimpan";
}
