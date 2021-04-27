<?php
include 'koneksi.php';

$tanggal			= $_POST['tanggal'];
$keterangan			= $_POST['keterangan'];

$query="UPDATE tbl_hari_libur SET tanggal='$tanggal', keterangan='$keterangan' where tanggal='$tanggal'";
mysqli_query($koneksi, $query);

header("location:PerubahanHariKerja.php");
?>