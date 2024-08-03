<?php
include '../connection.php';

$is_success = false;
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $sql = "INSERT INTO users (user_name, telepon, email, password) VALUES ('$user_name', '$telepon', '$email',  '$hashed_password')";

    if (mysqli_query($connection, $sql)) {
        $is_success = true;
        $message = 'Selamat Anda Berhasil Mendaftar';
    } else {
        $message = 'Error: ' . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PT.FOUR BEST SYNERGY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../Assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('../Assets/images/fbs.png');">
        <div class="inner">
            <div class="image-holder">
                <img src="../Assets/images/register.jpg" alt="">
            </div>
            <form action="../Admin/register.php" method="post">

                <br><br>
                <h3>Form Registrasi</h3>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" id="user_name" name="user_name" class="form-control" required>
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="number" placeholder="Nomor Telepon" id="telepon" name="telepon" class="form-control" required>
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Email Address" id="email" name="email" class="form-control" required>
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Password" id="password" name="password" class="form-control" required>
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <p>Sudah mempunyai Akun? <a href="login.php" style="text-decoration: none; color :brown">Login</a> Sekarang</p>
                <button type="submit">Register<i class="zmdi zmdi-arrow-right"></i></button>
            </form>
        </div>
    </div>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <script>
            Swal.fire({
                title: "<?php echo $is_success ? 'Registrasi Berhasil!' : 'Registrasi Gagal!'; ?>",
                text: "<?php echo $message; ?>",
                icon: "<?php echo $is_success ? 'success' : 'error'; ?>",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed && <?php echo $is_success ? 'true' : 'false'; ?>) {
                    window.location.href = "login.php";
                }
            });
        </script>
    <?php endif; ?>
</body>

</html>