<?php
include 'koneksi.php';
$api_token 		= $_GET['api_token'];

$query="DELETE from tbl_api_token WHERE api_token='$api_token'";
mysqli_query($koneksi, $query);

header("location:ManajemenTokenAPI.php")
?>