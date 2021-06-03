<?php

include "../koneksi.php";


$id = $_GET['id'];
$nim_nik_unit = $_GET['nim_nik_unit'];
$alamat = $_GET['alamat'];
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

$query = mysqli_query($koneksi,"SELECT isAccepted from tbl_pengajuan_alamat WHERE id='$id' ");

foreach($query as $row){
    $idApprove = $row['isAccepted'];
}
echo $idApprove;

if($idApprove == '0'){
    mysqli_query($koneksi,"UPDATE tbl_pengajuan_alamat SET isAccepted='1' WHERE id='$id'");
    mysqli_query($koneksi,"UPDATE tbl_user SET alamat='$alamat' WHERE nim_nik_unit='$nim_nik_unit'");
    mysqli_query($koneksi,"UPDATE tbl_user SET address_latitude='$latitude' WHERE nim_nik_unit='$nim_nik_unit'");
    mysqli_query($koneksi,"UPDATE tbl_user SET address_longitude='$longitude' WHERE nim_nik_unit='$nim_nik_unit'");
    header('Refresh:0.1; url=../ApprovalLokasi.php');
    echo '<script>alert("Lokasi Sudah Disetujui")</script>';
}else{
    header('Refresh:0.1; url=../ApprovalLokasi.php');
    echo '<script>alert("Lokasi Sudah Disetujui Sebelumnya")</script>';
}




?>