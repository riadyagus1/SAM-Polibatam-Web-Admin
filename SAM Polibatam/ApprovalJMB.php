<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>SAM Polibatam | Approval JMB</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="assets/images/favicon100.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="Home.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/LogoHD.png" height="35" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/TextHD.png" width="128" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/users/9.png" alt="user" class="profile-pic me-2">
                                <span class="mr-2-d-non d-lg-inline text-white small"><?= $_SESSION['nama'];?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Home.php" aria-expanded="false"><i class="me-3 fas fa-home "
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="DataKaryawan.php" aria-expanded="false">
                                <i class="me-3 fas fa-users" aria-hidden="true"></i><span class="hide-menu">Data
                                    Karyawan</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="RekapAbsen.php" aria-expanded="false"><i class="me-3  fas fa-clipboard-check"
                                    aria-hidden="true"></i><span class="hide-menu">Rekap Absen</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="ApprovalJMB.php" aria-expanded="false"><i class="me-3 f fas fa-clock"
                                    aria-hidden="true"></i><span class="hide-menu">Approval JMB</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="LokasiWFH.php" aria-expanded="false"><i class="me-3 fas fa-map"
                                    aria-hidden="true"></i><span class="hide-menu">Lokasi WFH</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="ApprovalLokasi.php" aria-expanded="false"><i class="me-3 fas fa-check-square"
                                    aria-hidden="true"></i><span class="hide-menu">Approval Lokasi WFH</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="PerubahanHariKerja.php" aria-expanded="false"><i class="me-3 fas fa-calendar-alt"
                                    aria-hidden="true"></i><span class="hide-menu">Perubahan Hari Kerja</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="ManajemenTokenAPI.php" aria-expanded="false"><i class="me-3 fas fa-fire"
                                    aria-hidden="true"></i><span class="hide-menu">Manajemen Token API</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Informasi.php" aria-expanded="false"><i class="me-3 fas fa-info-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Informasi</span></a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="Logout.php" class="btn btn-danger text-white mt-4">Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Approval Jam Merdeka Bekerja</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Home.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Approval Jam Merdeka Bekerja</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Pengajuan Jam Merdeka Bekerja</h4>
                                <h6 class="card-subtitle">Data yang ditampilakan adalah data yang diajukan melalui
                                    <code>Aplikasi SAM Polibatam</code></h6>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">NIM / NIK / Unit</th>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Tanggal Pengajuan</th>
                                                <th class="border-top-0">Jam Masuk</th>
                                                <th class="border-top-0">Jam Pulang</th>
                                                <th class="border-top-0">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $sql = mysqli_query($koneksi, "
                                                SELECT `tbl_pengajuan_jmb`.`id`, `tbl_pengajuan_jmb`.`nim_nik_unit`, `tbl_user`.`name`, `tbl_pengajuan_jmb`.`tanggal_pengajuan`, `tbl_pengajuan_jmb`.`jam_masuk`, `tbl_pengajuan_jmb`.`jam_pulang`, `tbl_pengajuan_jmb`.`isAccepted`
                                                FROM `tbl_pengajuan_jmb` 
                                                    LEFT JOIN `tbl_user` ON `tbl_pengajuan_jmb`.`nim_nik_unit` = `tbl_user`.`nim_nik_unit`;");
                                            foreach ($sql as $row) {
                                            if($row['isAccepted'] == '1'){
                                                $status = "<span class='text-success'><i class='fas fa-check'></i> Pengajuan Disetujui</span>";
                                            }else{
                                                $status = "
                                                <a href='Action/TerimaJMB.php?id=$row[id]&nim_nik_unit=$row[nim_nik_unit]&jam_masuk=$row[jam_masuk]&jam_pulang=$row[jam_pulang]'
                                                    class='btn btn-success d-none d-md-inline-block text-white'><i class='fas fa-check'></i> Terima</a> 
                                                <a href='Action/TolakJMB.php?id=$row[id]'
                                                    class='btn btn-danger d-none d-md-inline-block text-white'><i class='fas fa-times'></i> Tolak </a>";
                                            }    
                                            echo "<tr>
                                                    <td>" . $row['nim_nik_unit'] . "</td>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>" . $row['tanggal_pengajuan'] . "</td>
                                                    <td>" . $row['jam_masuk'] . "</td>
                                                    <td>" . $row['jam_pulang'] . "</td>
                                                    <td> 
                                                    <div class='col-md-6 col-4 align-self-center'>
                                                    <div class='text-end upgrade-btn'>
                                                        $status
                                                    </div>
                                                    </div>
                                                       </td>
                                                   </tr>";
                                               }
                                               ?>
                                        </tbody>
                                </div>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            © 2021 SAM Polibatam by <a href="https://www.polibatam.ac.id/">polibatam.ac.id</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>