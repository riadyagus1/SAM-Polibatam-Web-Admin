<?php   

if (isset($_GET['IsAccepted'], $_GET['id_header'])) {
    $stmt = mysqli_prepare($conn, "UPDATE tbl_izin SET IsAccepted = 1 WHERE id_header= ?");
    mysqli_stmt_bind_param($stmt, "sd", $_GET['IsAccepted'], $_GET['id_header']);
    $stmt->execute();
    $stmt->close();
    }

?>