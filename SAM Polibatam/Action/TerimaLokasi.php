<?php

include "../koneksi.php";


$id = $_GET['id'];
$addr = $_GET['alamat'];
$lat = $_GET['latitude'];
$lng = $_GET['longitude'];
$nnk = $_GET['nim_nik_unit'];
$query = mysqli_query($koneksi,"SELECT isAccepted from tbl_pengajuan_alamat WHERE id='$id' ");

foreach($query as $row){
    $idApprove = $row['isAccepted'];
}

if($idApprove == '0'){
    if ($koneksi->query("UPDATE tbl_pengajuan_alamat SET isAccepted='1' WHERE id='$id';") === TRUE) {
		$res = $koneksi->query("UPDATE tbl_user SET alamat='$addr',address_latitude='$lat',address_longitude='$lng' WHERE nim_nik_unit='$nnk';");
                if ($res === TRUE) {
			header('Refresh:0.1; url=../ApprovalLokasi.php');
    			echo '<script>alert("Lokasi Sudah Disetujui")</script>';
		}

		else {
			header('Refresh:0.1; url=../ApprovalLokasi.php');
    			echo '<script>alert("Lokasi Gagal Disetujui")</script>';
		}
    }

    else {
		header('Refresh:0.1; url=../ApprovalLokasi.php');
    		echo '<script>alert("Lokasi Gagal Disetujui")</script>';
    }
}

else{
    header('Refresh:0.1; url=../ApprovalLokasi.php');
    echo '<script>alert("Lokasi Sudah Disetujui Sebelumnya")</script>';
}
?>
