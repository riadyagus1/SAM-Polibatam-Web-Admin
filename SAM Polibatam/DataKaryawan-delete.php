<?php
include 'koneksi.php';
$nim_nik_unit 		= $_GET['nim_nik_unit'];

$query="DELETE from tbl_user WHERE nim_nik_unit='$nim_nik_unit'";
mysqli_query($koneksi, $query);

header("location:DataKaryawan.php")
?>