<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Electro</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['nama']; ?>!</h2>
    <p>Anda berhasil login.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
