<?php
include '../koneksi.php';
$id = $_GET['id'];

$query="DELETE from tbl_pengajuan_jmb WHERE id='$id'";


if ($koneksi->query($query) === TRUE) {
	echo '<script>alert("JMB Sudah Ditolak")</script>';
	header("location:../ApprovalJMB.php");
}

else {
	echo '<script>alert("JMB Gagal untuk Ditolak")</script>';
	header("location:../ApprovalJMB.php");

}

?>
