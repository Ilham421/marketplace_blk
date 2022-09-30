<link rel="stylesheet" href="../css/product.css">

<?php

    include_once 'koneksi.php';

    // Assign variable dari GET
    $kode = $_GET['kode'];
    $nama = $_GET['nama'];
    $stok = $_GET['stok'];
    $harga = $_GET['harga'];

    // Query Input ke table tamu
    $sql = "INSERT INTO produk VALUES(
        '{$kode}',
        '{$nama}',
        '{$stok}',
        '{$harga}');";
    // Jalankan Query
   mysqli_query($conn,$sql);

   header("location: ../produk.php")
   
?>
