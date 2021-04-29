<?php

	<?php
	include 'koneksi.php';
	$id = $_GET['id_header'];
	$query="DELETE from tbl_izin WHERE id_header='$id';";
	mysqli_query($koneksi, $query);

	header("location:ApprovalIzin.php")
?>
?>
