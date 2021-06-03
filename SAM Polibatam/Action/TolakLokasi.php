<?php
include '../koneksi.php';
$id = $_GET['id'];

$query="DELETE from tbl_pengajuan_alamat WHERE id='$id'";
mysqli_query($koneksi, $query);

header("location:../ApprovalLokasi.php")
?>