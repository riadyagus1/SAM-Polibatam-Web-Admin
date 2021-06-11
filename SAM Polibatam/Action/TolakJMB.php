<?php
include '../koneksi.php';
$id = $_GET['id'];

$query="DELETE from tbl_pengajuan_jmb WHERE id='$id'";
mysqli_query($koneksi, $query);

header("location:../ApprovalJMB.php")
?>