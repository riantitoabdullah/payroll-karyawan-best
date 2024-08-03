<?php
session_start();
include '../../connection.php';

if (!isset($_SESSION['user_name'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['user_name'];

$sql = "SELECT user_name FROM users ";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_name'] = $row['user_name'];
} else {
    // Jika data tidak ditemukan, atur nilai $_SESSION['nama_lengkap'] menjadi default atau kosong
    $_SESSION['user_name'] = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.FOUR BEST SYNERGY</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="../../assets2/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../../assets2/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../assets2/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="../../assets2/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="../../assets2/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../../assets2/icon/font-awesome/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="../../assets2/css/jquery.mCustomScrollbar.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../assets2/css/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2OhDR8k3Akzr6DNb7krF8N5sR72WFlzFx7wZEGTtXWAE6Xk+Hd+P5u2rGdY5" crossorigin="anonymous">


</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="../../assets2/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">

                        <ul class="nav-right">

                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="../../assets2/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION['user_name']; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Tampilan</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="../dashboard.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../dashboard.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-plus"></i></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Tambah Admin</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="./master_pegawai.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Master Pegawai</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../gaji/master_gaji.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-money"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Master Gaji Pegawai</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="../hari_kerja/master_hari_kerja.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-calendar"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Master Hari Kerja</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <br>

                                                <button type="button" class="btn waves-effect waves-light btn-primary " data-bs-toggle="modal" data-bs-target="#modalTambahPegawai">
                                                    <i class="ti-plus"></i>Tambah Pegawai</button>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center align-middle">No</th>
                                                                <th class="text-center align-middle">Nama Pegawai</th>
                                                                <th class="text-center align-middle">Alamat</th>
                                                                <th class="text-center align-middle">Telepon</th>
                                                                <th class="text-center align-middle">Email</th>
                                                                <th class="text-center align-middle">Tanggal Gabung</th>
                                                                <th class="text-center align-middle">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            $sql = "SELECT * FROM master_pegawai";
                                                            $result = mysqli_query($connection, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <tr>
                                                                    <th scope="row" class="text-center align-middle"><?php echo $no ?></th>
                                                                    <td class="text-center align-middle"><?php echo $row['nama_pegawai'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['alamat'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['telepon_pegawai'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['email_pegawai'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['tanggal_gabung'] ?></td>
                                                                    <td class="text-center align-middle">
                                                                        <a href="#" class="link-dark btn btn-warning" onclick="showEditModal(<?php echo $row['id_pegawai']; ?>, '<?php echo $row['nama_pegawai']; ?>')">Edit</a>
                                                                        <a href="delete_pegawai.php?id=<?php echo $row['id_pegawai']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Hapus</a>

                                                                    </td>
                                                                </tr>
                                                                <?php $no++ ?>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Basic table card end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id=" styleSelector">
                            </div>
                        </div>
                        <!-- TAMBAH PEGAWAI START POP UP -->
                        <div class="modal fade" id="modalTambahPegawai" tabindex="-1" aria-labelledby="modalTambahPegawaiLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTambahPegawaiLabel">Tambah Pegawai</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form for adding a new poli -->
                                        <form action="master_pegawai.php" method="POST">
                                            <div class="mb-3">
                                                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="telepon_pegawai" class="form-label">Nomor Telepon</label>
                                                <input type="number" class="form-control" id="telepon_pegawai" name="telepon_pegawai" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email_pegawai" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email_pegawai" name="email_pegawai" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_gabung" class="form-label">Tanggal Gabung</label>
                                                <input type="date" class="form-control" id="tanggal_gabung" name="tanggal_gabung" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="submit">Simpan Data Pegawai</button>
                                        </form>
                                    </div>
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $nama_pegawai = $_POST['nama_pegawai'];
                                        $alamat = $_POST['alamat'];
                                        $telepon_pegawai = $_POST['telepon_pegawai'];
                                        $email_pegawai = $_POST['email_pegawai'];
                                        $tanggal_gabung = $_POST['tanggal_gabung'];

                                        $sql = "INSERT INTO master_pegawai (nama_pegawai, alamat, telepon_pegawai, email_pegawai, tanggal_gabung) 
                                                VALUES ('$nama_pegawai', '$alamat', '$telepon_pegawai', '$email_pegawai', '$tanggal_gabung')";

                                        $is_success = false;
                                        $message = '';

                                        if (mysqli_query($connection, $sql)) {
                                            $is_success = true;
                                            $message = "Selamat Pegawai $nama_lengkap Berhasil Di Tambahkan";
                                        } else {
                                            $message = 'Error: ' . mysqli_error($connection);
                                        }

                                        mysqli_close($connection);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- END TAMBAH PEGAWAI -->

                        <!-- START EDIT PEGAWAI -->
                        <div class="modal fade" id="modalEditPegawai" tabindex="-1" aria-labelledby="modalEditPegawaiLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditPegawaiLabel">Edit Pegawai</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formEditPegawai" action="master_pegawai.php" method="POST" onsubmit="submitFormEdit(event)">
                                            <div class="mb-3">
                                                <label for="editNamaPegawai" class="form-label">Nama Pegawai</label>
                                                <input type="text" class="form-control" id="editNamaPegawai" name="editNamaPegawai" required>
                                                <input type="hidden" id="editIdPegawai" name="editIdPegawai">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="submitEdit">Simpan Perubahan</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        if (isset($_POST['submitEdit'])) {
                            $id = $_POST['editIdPegawai'];
                            $nama_pegawai = $_POST['editNamaPegawai'];

                            $sql = "UPDATE master_pegawai SET nama_pegawai = '$nama_pegawai' WHERE id = $id";
                            $result = mysqli_query($connection, $sql);

                            if ($result) {
                                echo "<script>    
                                window.location.href = 'master_pegawai.php?update_success=true';
                                </script>";
                            } else {
                                echo "<script>
                                window.location.href = 'master_pegawai.php?update_failure=true';
                                </script>";
                            }
                        }

                        ?>

                        <!-- END EDIT PEGAWAI  -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required Jquery -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JS TAMBAH PEGAWAI -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($is_success) && $is_success) : ?>
                Swal.fire({
                    title: "Success!",
                    text: "<?php echo $message; ?>",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "master_pegawai.php";
                    }
                });
            <?php else : ?>
                Swal.fire({
                    title: "Error!",
                    text: "<?php echo $message; ?>",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            <?php endif; ?>
        });
    </script>
    <!-- JS EDIT PEGAWAI -->
    <script>
        function showEditModal(id, nama_pegawai) {
            document.getElementById('editIdPegawai').value = id;
            document.getElementById('editNamaPegawai').value = nama_pegawai;
            var editModal = new bootstrap.Modal(document.getElementById('modalEditPegawai'));
            editModal.show();
        }
    </script>
    <script type="text/javascript" src="../../assets2/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets2/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="../../assets2/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="../../assets2/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="../../assets2/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="../../assets2/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../../assets2/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../../assets2/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="../../assets2/js/SmoothScroll.js"></script>
    <script src="../../assets2/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="../../assets2/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="../../assets2/pages/widget/amchart/gauge.js"></script>
    <script src="../../assets2/pages/widget/amchart/serial.js"></script>
    <script src="../../assets2/pages/widget/amchart/light.js"></script>
    <script src="../../assets2/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="../../assets2/js/pcoded.min.js"></script>
    <script src="../../assets2/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="../../assets2/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="../../assets2/js/script.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>