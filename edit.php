<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tamu</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <?php
    // Header
        include 'header.php';

        session_start();
        
        // Jika belum login akan diarahkan ke halaman login
        if(isset($_SESSION["loggedin"]) == false){
            header("location: login.php");
            exit;
        }

        require_once "process/koneksi.php";
    ?>

    <br>
    <a href="produk.php" data-aos="fade-up-left" data-aos-duration="1200" data-aos-offset="500">Lihat Semua data</a>
    
    <?php
        include 'process/koneksi.php';

        // Memanggil NIK menggunakan Query Table Tamu
        $id = $_GET['kode'];
        $query_mysql = mysqli_query($conn, "SELECT * FROM produk WHERE kode_barang='$id'")or die(mysql_error());
        
        while($hasilProduk = mysqli_fetch_array($query_mysql)){
	?>
	<div class="form_tamu" data-aos="fade-up-left" data-aos-duration="1200" data-aos-offset="500" data-aos-delay="200">
        <h2>FORMULIR EDIT PRODUK</h2>
        <form  action="process/update.php" method="POST" class="form-tamu">
                <label for="kode"> Kode Produk: <input type="text" name="kode" id="kode" placeholder="tidak perlu di ubah"  value="<?php echo $hasilProduk['kode_barang'] ?>" required></label>
                <label for="nama"> Nama Produk: <input type="text" name="nama" id="nama" placeholder="Masukan nama produk"  value="<?php echo $hasilProduk['nama_barang'] ?>" required></label>
                <label for="stok"> Stok Produk: <input type="number" name="stok" id="s tok" placeholder="Masukan stok produk"  value="<?php echo $hasilProduk['stok_barang'] ?>" required></label>
                <label for="harga"> Harga Produk: <input type="number" name="harga" id="harga" placeholder="Masukan harga produk"  value="<?php echo $hasilProduk['harga_barang'] ?>" required></label>
                <label for="bidang"> Bidang Kejuruan: 
                <select name="kategori" id="kategori">
                    <option value="" selected="true" disabled="disabled">Kategori Barang:</option>
                    <option value="Promo" > Promo </option>
                    <option value="Minuman" > Minuman </option>
                    <option value="Happy Meal" > Happy Meal </option>
                    <option value="Promo dan Minuman" > Promo dan Minuman </option>
                </select>
            </label>
                <input type="submit" value="Input" name="input">    
        </form>
    </div>

	<?php } ?>

    <?php 
       
    ?>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
  </script>
    <script>
        let selectedName = "<?php echo $hasilProduk['kategori'];?>";
        let dropdown = document.getElementById('kategori');
        let options = dropdown.children;
        
        for(let i = 0; i < options.length; i++){
            if(options[i].getAttribute('value') == selectedName){
                options[i].setAttribute('selected',"true");
                break;
            }
        }
    </script>

</body>

<?php
    include_once 'footer.php';
?>

</html>