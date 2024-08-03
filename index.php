<?php

include 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./Assets/utama/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Assets/utama/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./Assets/utama/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./Assets/utama/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./Assets/utama/fonts/icomoon/style.css">
    <link rel="stylesheet" href="./Assets/utama/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="./Assets/utama/css/daterangepicker.css">
    <link rel="stylesheet" href="./Assets/utama/css/aos.css">
    <link rel="stylesheet" href="./Assets/utama/css/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11">

    <title>PT.FOUR BEST SYNERGY</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0">PT.FOUR BEST SYSTEM <span class="text-primary">.</span></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">

                    <li><a href="./Admin/login.php" style="color: white;">Login</a></li>
                </ul>
                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">

                    <li><a href="./clockout.php" style="color: white;">Clock Out</a></li>
                </ul>

                <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </nav>


    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="intro-wrap">
                        <h1 class="mb-5"><span class="d-block">Dont Forget To </span> Clock In / Clock Out<span class="typed-words"></span></h1>

                        <div class="row">
                            <div class="col-12">
                                <form class="form" method="post" action="index.php">
                                    <div class="row mb-2">
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <label for="">Silahkan Cari Nama Anda</label>
                                            <select name="id_pegawai" id="id_pegawai" class="form-control ">
                                                <option value="">Nama Anda</option>
                                                <?php
                                                $query = "SELECT * FROM master_pegawai";
                                                $result = mysqli_query($connection, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='" . $row['id_pegawai'] . "'>" . $row['nama_pegawai'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                                            <label for="">Tanggal Absen</label>
                                            <input type="date" class="form-control" name="tanggal_absen" id="tanggal_absen">
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                            <label for="">Jam Masuk</label>
                                            <input type="Time" class="form-control" placeholder="# of People" name="jam_masuk" id="jam_masuk">
                                        </div>
                                        <input type="hidden" class="form-control" placeholder="# of People" name="jam_keluar" id="jam_keluar" value="00:00:00">
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <button type="submit" class="btn btn-primary btn-block" name="submit">Clock In</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $id_pegawai = $_POST['id_pegawai'];
                                    $tanggal_absen = $_POST['tanggal_absen'];
                                    $jam_masuk = $_POST['jam_masuk'];
                                    $jam_keluar = $_POST['jam_keluar'];

                                    $sql = "INSERT INTO absensi_karyawan (id_pegawai, tanggal_absen, jam_masuk, jam_keluar) 
                                                VALUES ('$id_pegawai', '$tanggal_absen', '$jam_masuk', '$jam_keluar')";

                                    $is_success = false;
                                    $message = '';

                                    if (mysqli_query($connection, $sql)) {
                                        $is_success = true;
                                        $message = "Terima Kasih $id_pegawai Sudah Melakukan Absen";
                                    } else {
                                        $message = 'Error: ' . mysqli_error($connection);
                                    }


                                    echo "Pegawai ID: " . $id_pegawai;


                                    mysqli_close($connection);
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="slides">
                        <img src="./Assets/utama/images/hero-slider-1.jpg" alt="Image" class="img-fluid active">

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
                        window.location.href = "index.php";
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
    <script src="./Assets/utama/js/jquery-3.4.1.min.js"></script>
    <script src="./Assets/utama/js/popper.min.js"></script>
    <script src="./Assets/utama/js/bootstrap.min.js"></script>
    <script src="./Assets/utama/js/owl.carousel.min.js"></script>
    <script src="./Assets/utama/js/jquery.animateNumber.min.js"></script>
    <script src="./Assets/utama/js/jquery.waypoints.min.js"></script>
    <script src="./Assets/utama/js/jquery.fancybox.min.js"></script>
    <script src="./Assets/utama/js/aos.js"></script>
    <script src="./Assets/utama/js/moment.min.js"></script>
    <script src="./Assets/utama/js/daterangepicker.js"></script>

    <script src="js/typed.js"></script>
    <script>
        $(function() {
            var slides = $('.slides'),
                images = slides.find('img');

            images.each(function(i) {
                $(this).attr('data-id', i + 1);
            })

            var typed = new Typed('.typed-words', {
                strings: ["San Francisco.", " Paris.", " New Zealand.", " Maui.", " London."],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                preStringTyped: (arrayPos, self) => {
                    arrayPos++;
                    console.log(arrayPos);
                    $('.slides img').removeClass('active');
                    $('.slides img[data-id="' + arrayPos + '"]').addClass('active');
                }

            });
        })
    </script>

    <script src="./Assets/utama/js/custom.js"></script>

</body>

</html>