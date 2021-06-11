<?php

include "../koneksi.php";

$nim_nik_unit   = $_GET['nim_nik_unit'];
$jam_masuk      = $_GET['jam_masuk'];
$jam_pulang     = $_GET['jam_pulang'];
$id             = $_GET['id'];
$query          = mysqli_query($koneksi,"SELECT isAccepted from tbl_pengajuan_jmb WHERE id='$id' ");

foreach($query as $row){
    $idApprove = $row['isAccepted'];
}

if($idApprove == '0'){
    if($koneksi->query("UPDATE tbl_pengajuan_jmb SET isAccepted='1' WHERE id='$id';") === TRUE) {
        $res1 = $koneksi->query("UPDATE tbl_user SET jam_masuk='$jam_masuk', jam_pulang='$jam_pulang' WHERE nim_nik_unit='$nim_nik_unit';");
        if ($res1 === TRUE) {
           header('Refresh:0.1; url=../ApprovalJMB.php');
           echo '<script>alert("Jam Merdeka Mengajar Sudah Disetujui")</script>';
        }

        else {
           header('Refresh:0.1; url=../ApprovalJMB.php');
           echo '<script>alert("Jam Merdeka Mengajar Gagal Untuk Disetujui")</script>';
        }
    }

    else {
    header('Refresh:0.1; url=../ApprovalJMB.php');
    echo '<script>alert("Jam Merdeka Mengajar Gagal Untuk Disetujui")</script>';
    }

}

else{
    header('Refresh:0.1; url=../ApprovalJMB.php');
    echo '<script>alert("Jam Merdeka Mengajar Sudah Disetujui Sebelumnya")</script>';
}

?>
