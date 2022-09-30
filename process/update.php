<?php 
include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
        
mysqli_query($conn, "UPDATE produk SET nama_barang='$nama', stok_barang='$stok',  harga_barang='$harga', kategori_barang='$kategori' WHERE kode_barang='$kode'");
 
header("location: ../produk.php");
?>