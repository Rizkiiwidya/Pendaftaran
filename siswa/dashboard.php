<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Aplikasi Pendaftaran Siswa</title>

    <!gambar title>
    <link rel= "icon" type="image/png" href = "../asset/img/planes.PNG">

    <!-- Custom fonts for this template-->
    <link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Pendaftaran Siswa Baru</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                SISWA
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

             <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="nilai.php">
                    <i class="fas fa-th-list"></i>
                    <span>Nilai</span></a>
            </li>

             <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="editprofil.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Edit Profil</span></a>
            </li>

             <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">RIZKI WIDYA N</span>
                                <img class="img-profile rounded-circle"
                                    src="../asset/img/orang.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="editprofil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profil
                                </a>
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                <div class="row">
                    <div class="col-md-6">

                        <!-- Illustrations -->
                         <div class="card shadow mb-4">
                         <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">DATA NILAI</h6>
                         </div>
                         <div class="card-body">
                         <form class="user">
                                        <div class="form-group">
                                        <label for="ujian_un">Masukan Nilai Ujian Nasional</label>
                                            <input type="text" name="nilai_un" class="form-control"
                                                id="nilai_un"
                                                placeholder="Masukan Nilai Ujian Nasional">
                                        </div>

                                        <div class="form-group">
                                        <label for="ujian_us">Masukan Nilai Ujian Sekolah</label>
                                            <input type="text" name="nilai_us" class="form-control"
                                                id="nilai_us"
                                                placeholder="Masukan Nilai Ujian Sekolah">
                                        </div>
                                        <button type="submit"class="btn btn-primary">SIMPAN</button>
                                    </form>
                                    </div>
                                    </div>
                    </div>
                    <div class="col-md-6">

                     <!-- Illustrations -->
                     <div class="card shadow mb-4">
                     <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                     </div>
                     <div class="card-body">
                        <div class="text-center">
                        <img src="../asset/img/orang.png" alt="fotoprofil"class="img-fluid 
                        rounded-circle"style="width: 200px"> 
                        </div>
                        <h5 class="text-center card-title">RIZKI WIDYA N</h5>

                        <ul class="list-group">
                            <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Tempat, Tanggal Lahir</h6>
                            <small>Cilacap, 19 Mei 1999</small>
                            </li>
                        
                            <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                            <small>Laki Laki</small>
                            </li>
                        
                            <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Agama</h6>
                            <small>Islam</small>
                            </li>
                        
                            <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Alamat</h6>
                            <small>Sindangbarang, Karangpucung - Cilacap</small>
                            </li>
                        
                            <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Email</h6>
                            <small>erween97@gmail.com</small>
                            </li>

                            <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Telepon</h6>
                            <small>085787123000</small>
                            </li>

                           
                        </ul>
                    </div>

                    </div>
                    </div>
                 </div>
                 </div>
                 <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Aplikasi Pendaftaran Siswa - 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin Logout ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah anda ingin keluar dari aplikasi !</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="../login.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../asset/vendor/jquery/jquery.min.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../asset/js/sb-admin-2.min.js"></script>

</body>

</html>