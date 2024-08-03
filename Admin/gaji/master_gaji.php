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
                                <li>
                                    <a href="./absensi/karyawan.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-slice"></i></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Absensi Karyawan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="../master_pegawai/master_pegawai.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Master Pegawai</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
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

                                                <button type="button" class="btn waves-effect waves-light btn-primary " data-bs-toggle="modal" data-bs-target="#modalTambahGajiPegawai">
                                                    <i class="ti-plus"></i>Tambah Gaji Pegawai</button>
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
                                                                <th class="text-center align-middle">Gaji Pokok</th>
                                                                <th class="text-center align-middle">Denda Keterlambatan</th>
                                                                <th class="text-center align-middle">Pemotongan Gaji Harian</th>
                                                                <th class="text-center align-middle">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            $sql = "SELECT * FROM master_gaji_pegawai";
                                                            $sql = "SELECT * FROM master_pegawai, master_gaji_pegawai WHERE master_pegawai.id_pegawai = master_gaji_pegawai.id_pegawai";
                                                            $result = mysqli_query($connection, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <tr>
                                                                    <th scope="row" class="text-center align-middle"><?php echo $no ?></th>
                                                                    <td class="text-center align-middle"><?php echo $row['nama_pegawai'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['gaji_pokok'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['denda_keterlambatan'] ?></td>
                                                                    <td class="text-center align-middle"><?php echo $row['pemotongan_gaji_harian'] ?></td>
                                                                    <td class="text-center align-middle">
                                                                        <a href="#" class="link-dark btn btn-warning" onclick="showEditModal('<?php echo $row['id']; ?>', '<?php echo $row['nama_pegawai']; ?>', '<?php echo $row['gaji_pokok']; ?>', '<?php echo $row['denda_keterlambatan']; ?>', '<?php echo $row['pemotongan_gaji_harian']; ?>')">Edit</a>

                                                                        <a href="delete_gaji.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Hapus</a>

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
                        <div class="modal fade" id="modalTambahGajiPegawai" tabindex="-1" aria-labelledby="modalTambahGajiPegawaiLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTambahGajiPegawaiLabel">Tambah Gaji Pegawai</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form for adding a new poli -->
                                        <form action="master_gaji.php" method="POST">
                                            <div class="mb-3">
                                                <label for="id_pegawai" class="form-label">Nama Pegawai</label>
                                                <select class="form-control" id="id_pegawai" name="id_pegawai" required>
                                                    <option selected disabled>Pilih Pegawai</option>
                                                    <?php
                                                    $query = "SELECT * FROM master_pegawai";
                                                    $result = mysqli_query($connection, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option value='" . $row['id_pegawai'] . "'>" . $row['nama_pegawai'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                                                <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="denda_keterlambatan" class="form-label">Denda Keterlambatan</label>
                                                <input type="number" class="form-control" id="denda_keterlambatan" name="denda_keterlambatan" step="0.01">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemotongan_gaji_harian" class="form-label">Pemotongan Gaji Harian</label>
                                                <input type="number" class="form-control" id="pemotongan_gaji_harian" name="pemotongan_gaji_harian" step="0.01">
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="submit">Simpan Data Gaji Pegawai</button>
                                        </form>
                                    </div>
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $id_pegawai = $_POST['id_pegawai'];
                                        $gaji_pokok = $_POST['gaji_pokok'];
                                        $denda_keterlambatan = $_POST['denda_keterlambatan'];
                                        $pemotongan_gaji_harian = $_POST['pemotongan_gaji_harian'];

                                        $sql = "INSERT INTO master_gaji_pegawai (id_pegawai, gaji_pokok, denda_keterlambatan, pemotongan_gaji_harian) 
                                                VALUES ('$id_pegawai', '$gaji_pokok', '$denda_keterlambatan', '$pemotongan_gaji_harian')";

                                        $is_success = false;
                                        $message = '';

                                        if (mysqli_query($connection, $sql)) {
                                            $is_success = true;
                                            $message = "Selamat Pegawai $id_pegawai Berhasil Di Tambahkan";
                                        } else {
                                            $message = 'Error: ' . mysqli_error($connection);
                                        }


                                        echo "Pegawai ID: " . $pegawai_id;


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
                                        <h5 class="modal-title" id="modalEditPegawaiLabel">Edit Gaji Pegawai</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formEditPegawai" action="master_gaji.php" method="POST">
                                            <div class="mb-3">
                                                <label for="editNamaPegawai" class="form-label">Nama Pegawai</label>
                                                <input type="text" class="form-control" id="editNamaPegawai" name="editNamaPegawai" readonly>

                                                <label for="editGajiPokok" class="form-label">Gaji Pokok</label>
                                                <input type="text" class="form-control" id="editGajiPokok" name="editGajiPokok" required>

                                                <label for="editDendaKeterlambatan" class="form-label">Denda Keterlambatan</label>
                                                <input type="text" class="form-control" id="editDendaKeterlambatan" name="editDendaKeterlambatan" required>

                                                <label for="editGajiHarian" class="form-label">Pemotongan Gaji Harian</label>
                                                <input type="text" class="form-control" id="editGajiHarian" name="editGajiHarian" required>

                                                <input type="hidden" id="editIdGaji" name="editIdGaji">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="submitEdit">Simpan Perubahan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitEdit'])) {
                            $id = $_POST['editIdGaji'];
                            $gaji_pokok = $_POST['editGajiPokok'];
                            $denda_keterlambatan = $_POST['editDendaKeterlambatan'];
                            $pemotongan_gaji_harian = $_POST['editGajiHarian'];

                            if (is_numeric($gaji_pokok) && is_numeric($denda_keterlambatan) && is_numeric($pemotongan_gaji_harian)) {
                                $sql = "UPDATE gaji_pegawai SET gaji_pokok=?, denda_keterlambatan=?, pemotongan_gaji_harian=? WHERE id=?";

                                if ($stmt = mysqli_prepare($connection, $sql)) {
                                    mysqli_stmt_bind_param($stmt, "dddi", $gaji_pokok, $denda_keterlambatan, $pemotongan_gaji_harian, $id);

                                    if (mysqli_stmt_execute($stmt)) {
                                        echo "Gaji pegawai dengan ID $id berhasil diupdate.";
                                    } else {
                                        echo 'Error: ' . mysqli_stmt_error($stmt);
                                    }

                                    mysqli_stmt_close($stmt);
                                } else {
                                    echo 'Error: ' . mysqli_error($connection);
                                }
                            } else {
                                echo 'Validasi gagal. Pastikan semua input berupa angka.';
                            }
                        }

                        mysqli_close($connection);
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
                        window.location.href = "master_gaji.php";
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
        function showEditModal(id, namaPegawai, gajiPokok, dendaKeterlambatan, pemotonganGajiHarian) {
            document.getElementById('editIdGaji').value = id;
            document.getElementById('editNamaPegawai').value = namaPegawai;
            document.getElementById('editGajiPokok').value = gajiPokok;
            document.getElementById('editDendaKeterlambatan').value = dendaKeterlambatan;
            document.getElementById('editGajiHarian').value = pemotonganGajiHarian;
            var myModal = new bootstrap.Modal(document.getElementById('modalEditPegawai'), {
                keyboard: false
            });
            myModal.show();
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
    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


</body>

</html>