<?php
include '../koneksi.php';
$id = $_GET['id'];

$query="DELETE from tbl_pengajuan_alamat WHERE id='$id'";
mysqli_query($koneksi, $query);

if ($koneksi->query($query) === TRUE) {
	echo '<script>alert("Lokasi Sudah Ditolak")</script>';
	header("location:../ApprovalLokasi.php");
}

else {
	echo '<script>alert("Lokasi Gagal untuk Ditolak")</script>';
	header("location:../ApprovalLokasi.php");
}

?>
