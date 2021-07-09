<?php
include 'koneksi.php';

$api_token			= $_POST['api_token'];
$keterangan			= $_POST['keterangan'];

$query="INSERT INTO tbl_api_token SET api_token='$api_token', keterangan='$keterangan'";
mysqli_query($koneksi, $query);

header("location:ManajemenTokenAPI.php")
?>