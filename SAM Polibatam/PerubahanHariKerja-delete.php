<?php
include 'koneksi.php';

$tanggal 		= $_GET['tanggal'];

$query="DELETE from tbl_hari_libur WHERE tanggal='$tanggal'";
mysqli_query($koneksi, $query);

header("location:PerubahanHariKerja.php")
?>