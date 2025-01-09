<?php
include('../koneksi.php');
$id = $_GET['id'];
$query = "DELETE FROM agama where id='$id'";
if($connection->query($query))
{
    header("location:data-agama.php");
}else{
    echo "DATA GAGAL DIHAPUS";
}
?>