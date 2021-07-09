<?php
//setting header to json
header('Content-Type: application/json');
include '../koneksi.php';

//query to get data from the table
$query = "SELECT DATE_FORMAT(tanggal_absen,'%d-%m-%Y') as niceDate, count(*) as total, sum(case when status = 'Hadir WFO' OR status = 'Hadir WFH' then 1 else 0 end) as presensi from tbl_absen_header GROUP BY tanggal_absen ORDER BY tanggal_absen DESC LIMIT 7;";

//execute query
$result = $koneksi->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$koneksi->close();

//now print the data
$flip = array_reverse($data);
print json_encode($flip);
