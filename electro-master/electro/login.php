<?php
// login.php
include 'config.php'; // file koneksi ke database

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM pengguna WHERE email='$email' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];
        header("Location: index.php"); // arahkan ke halaman utama
        exit();
    } else {
        echo "<script>alert('Email atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Electro</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Login ke Akun Anda</h2>
    <form method="POST" action="">
        <label>Email:</label><br>
        <input type="text" name="email" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
