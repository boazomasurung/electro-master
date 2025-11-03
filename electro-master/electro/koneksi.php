<?php
$host = "localhost";
$user = "root"; // default user XAMPP
$pass = "";     // kosong jika belum diset password
$db   = "electro_store"; // nama database kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
