<?php
include('koneksi.php');
 
$id = $_GET['kode'];
 
$query = mysqli_query($conn, "DELETE FROM produk WHERE kode_barang='$id'");
 
if($query){
 header("location:../produk.php");
}else{
 echo 'Data gagal dihapus. Klik <a href="../index.php">di sini</a> untuk ke halaman utama.';
}
 
?>