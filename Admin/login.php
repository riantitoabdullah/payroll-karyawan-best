<?php
session_start();
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name='$user_name'";
    $result = mysqli_query($connection, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_name'] = $user_name;
            header("Location: dashboard.php");
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
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
            <form method="post">
                <img src="Assets/images/logo.png" style="width: 150px; " alt="">
                <br><br><br><br><br>
                <h3>Silahkan Login</h3>
                <div class="form-wrapper">
                    <input type="text" placeholder="Masukkan User Name Anda" id="user_name" name="user_name" class="form-control" required>
                    <i class="zmdi zmdi-email"></i>
                </div>

                <div class="form-wrapper">
                    <input type="password" placeholder="Masukkan Password Anda" id="password" name="password" class="form-control" required>
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <p>Belum mempunyai Akun? <a href="register.php" style="text-decoration: none; color :brown">Daftar</a> Sekarang</p>
                <button>Login<i class="zmdi zmdi-arrow-right"></i></button>
            </form>
        </div>
    </div>

</body>

</html>