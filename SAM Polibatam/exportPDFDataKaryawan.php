<?php
include('koneksi.php');
require_once("libs/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from tbl_user");
$html = '<center><h3>Data Karyawan SAM Polibatam</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>NIM</th>
 <th>Nama</th>
 <th>Jabatan</th>
 <th>Alamat</th>
 </tr>';
 
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$row['nim_nik_unit']."</td>
 <td>".$row['name']."</td>
 <td>".$row['jabatan']."</td>
 <td>".$row['alamat']."</td>
 </tr>";
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('DataKaryawanSAMPolibatam.pdf');
?>