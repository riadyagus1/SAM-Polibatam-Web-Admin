<?php
include 'koneksi.php';

$tanggal			= $_POST['tanggal'];
$keterangan			= $_POST['keterangan'];

$query="INSERT INTO tbl_hari_libur SET tanggal='$tanggal', keterangan='$keterangan'";
mysqli_query($koneksi, $query);

header("location:PerubahanHariKerja.php")
?>