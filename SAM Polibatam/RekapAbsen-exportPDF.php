<?php
include 'koneksi.php';
include 'fpdf/fpdf.php';
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"REKAP ABSEN",0,10,'C');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(4,0.6,'Tanggal',1,0,'C',0);
$pdf->Cell(10,0.6,'Nama',1,0,'C',0);
$pdf->Cell(5,0.6,'Jam Masuk',1,0,'C',0);
$pdf->Cell(5,0.6,'Jam Keluar',1,0,'C',0);
$pdf->Cell(4,0.6,'Status',1,1,'C',0);
$pdf->SetFont('Arial','',10);
$no=1;
$query = mysqli_query($koneksi," select tbl_absen_header.tanggal_absen ,tbl_user.name , tbl_absen_masuk.jam_masuk ,tbl_absen_keluar.jam_keluar, tbl_user.alamat , tbl_absen_masuk.bukti_foto_masuk , tbl_absen_keluar.bukti_foto_keluar , tbl_absen_header.status FROM tbl_absen_header JOIN tbl_absen_masuk ON tbl_absen_header.id = tbl_absen_masuk.id_header JOIN tbl_absen_keluar ON tbl_absen_header.id = tbl_absen_keluar.id_header JOIN tbl_user ON tbl_absen_header.nim_nik_unit = tbl_user.nim_nik_unit
");
while($lihat= mysqli_fetch_array($query)){
    $pdf->Cell(4,0.6,$lihat['tanggal_absen'],1,0,'C',0);
    $pdf->Cell(10,0.6,$lihat['name'],1,0,'C',0);
    $pdf->Cell(5,0.6,$lihat['jam_masuk'],1,0,'C',0);
    $pdf->Cell(5,0.6,$lihat['jam_keluar'],1,0,'C',0);
    $pdf->Cell(4,0.6,$lihat['status'],1,1,'C',0);
}
$pdf->Output("RekapAbsen.php","I");
?>