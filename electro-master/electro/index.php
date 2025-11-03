<?php
include 'koneksi.php'; // sambungkan ke database

// ambil data produk dari database
$query = "SELECT * FROM produk LIMIT 6";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electro - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>New Products</h2>

<div class="produk-container">
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="produk">
        <img src="images/<?php echo $row['gambar']; ?>" width="150"><br>
        <h3><?php echo $row['nama_produk']; ?></h3>
        <p>Rp <?php echo number_format($row['harga']); ?></p>
        <button>Beli Sekarang</button>
    </div>
<?php } ?>
</div>

</body>
</html>
