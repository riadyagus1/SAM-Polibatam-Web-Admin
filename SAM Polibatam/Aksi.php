<?php

include 'koneksi.php';   

if ($_GET['id_header'])) {
    $stmt = $koneksi->prepare("UPDATE tbl_izin SET IsAccepted = 1 WHERE id_header= ?");

    $stmt->bind_param("s", $id);
    
    $id = $_GET['id_header'];
    
    $stmt->execute();
    $stmt->close();
    $koneksi->close();
    }

?>
