<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <?= $this->renderSection('title'); ?>

    <!-- icon tittle -->
    <link rel="icon" href="<?= base_url() . "assets/img/logo_dt.png"; ?>">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/template/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/template/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/template/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url("admin"); ?>" class="brand-link">
                <span class="brand-text font-weight-light ml-3">Sistem Informasi Masjid</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() . "assets/img/logo_dt.png"; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $namaUser; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url("admin"); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-header">Settings</li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>admin/data-user" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Pengguna
                                    <span class="badge badge-info right"><?= $jumlah; ?></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Kelola Kas</li>
                        <!-- kas masjid -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-mosque"></i>
                                <p>Kas Masjid
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url("admin/pemasukan-masjid"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pemasukan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url("admin/pengeluaran-masjid"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengeluaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url("admin/rekap-kas-masjid"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekap Kas Masjid</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- kas sosial -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>Kas Sosial
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url("admin/pemasukan-sosial"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pemasukan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url("admin/pengeluaran-sosial"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengeluaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/rekap-kas-sosial" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekap Kas Sosial</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- laporan kas -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Laporan Kas
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url("/admin/laporan-masjid"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Kas Masjid</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url("/admin/laporan-sosial"); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laporan Kas Sosial</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Content</li>
                        <li class="nav-item">
                            <a href="<?= base_url("/admin/galeri"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Galeri
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("/admin/kepengurusan"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                    Kepengurusan
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Action</li>
                        <li class="nav-item">
                            <a href="<?= base_url("/logout"); ?>" class="nav-link" onclick="return confirm('Yakin Mau Logout')">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->

        <?= $this->renderSection('content'); ?>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">SudenDEV</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/template/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/template/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Sparkline -->
    <script src="/template/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/template/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/template/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/template/plugins/moment/moment.min.js"></script>
    <script src="/template/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/template/dist/js/adminlte.js"></script>


    <!-- DataTables & Plugins -->
    <script src="/template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/template/plugins/jszip/jszip.min.js"></script>
    <script src="/template/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/template/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- My JS -->
    <script src="/assets/myjs.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // mengambil dari Flashdata dari controller
        <?php if (session()->getFlashdata('success')) : ?>
            Swal.fire(
                '<?= session()->getFlashdata('success'); ?>',
                '<?= session()->getFlashdata('pesan'); ?>',
                '<?= session()->getFlashdata('icon'); ?>',
            )
        <?php endif; ?>
    </script>
</body>

</html>