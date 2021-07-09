<?php
include 'koneksi.php';
$nim_nik_unit 		= $_GET['nim_nik_unit'];
$joined = $nim_nik_unit . "%";

$query7="DELETE from tbl_user WHERE nim_nik_unit='$nim_nik_unit'";
$query6="DELETE from tbl_absen_header WHERE nim_nik_unit='$nim_nik_unit'";
$query5="DELETE from tbl_absen_masuk WHERE id_header LIKE '$joined'";
$query4="DELETE from tbl_absen_keluar WHERE id_header LIKE '$joined'";
$query3="DELETE from tbl_izin WHERE id_header LIKE '$joined'";
$query2="DELETE from tbl_pengajuan_jmb WHERE nim_nik_unit='$nim_nik_unit'";
$query1="DELETE from tbl_pengajuan_alamat WHERE nim_nik_unit='$nim_nik_unit'";

if ($koneksi->query($query1) === TRUE) {
	if ($koneksi->query($query2) === TRUE) {
		if ($koneksi->query($query3) === TRUE) {
			if ($koneksi->query($query4) === TRUE) {
				if ($koneksi->query($query5) === TRUE) {
					if ($koneksi->query($query6) === TRUE) {
						if ($koneksi->query($query7) === TRUE) {
							echo"<script>alert('Data Karyawan Berhasil Dihapus')</script>";
							header("location:DataKaryawan.php");
						}

						else {
							echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
                                                        header("location:DataKaryawan.php");
						}
					}

					else {
						echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
                                                header("location:DataKaryawan.php");
					}
				}

				else {
					echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
                                        header("location:DataKaryawan.php");
				}
			}

			else {
				echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
                                header("location:DataKaryawan.php");
			}
		}

		else {
			echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
                        header("location:DataKaryawan.php");
		}
	}

	else {
		echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
                header("location:DataKaryawan.php");
	}
}

else {
	echo"<script>alert('Data Karyawan Gagal Dihapus')</script>";
        header("location:DataKaryawan.php");
}

?>
