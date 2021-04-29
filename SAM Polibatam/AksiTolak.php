<?php
	include 'koneksi.php';
	$id = $_GET['id_header'];
	$query="DELETE from tbl_izin WHERE id_header='$id';";

	if ($koneksi->query($query) === TRUE) {
		$koneksi->close();
		header("location:ApprovalIzin.php")
	}

	else {
		$koneksi->close();
		echo "Error!";
	}
?>
