<!DOCTYPE html>

<?php
    session_start();
    
    // Jika belum login akan diarahkan ke halaman login
      if(isset($_SESSION["loggedin"]) == false){
        header("location: login.php");
        exit;
    }

    require_once "process/koneksi.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BARANG | IlhamShop</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <?php
        include_once 'header.php';

    ?>

    <!-- Daftar Barang -->
    <div class="daftar_produk" data-aos="fade-up-right" data-aos-offset="450" data-aos-duration="1200">
        <h2>Data Produk</h2>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Product.." title="Type in a name">
        <table width="100%" id="tamu">
            <tr class="header_table">
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Opsi</th>	
            </tr>
            <?php
                include_once 'process/koneksi.php';
                include 'process/function.php';  
                // Query Data Tamu
                $sql = "SELECT * FROM produk;";
                $nomor = 1;
                // $harga=$_POST['harga'];
                $queryRes = mysqli_query($conn,$sql);
                while($hasilProduk = mysqli_fetch_array($queryRes)){
                    
            ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?></td>
                    <td align="center"><?= $hasilProduk['kode_barang'] ?></td>
                    <td><?= $hasilProduk['nama_barang'] ?></td>
                    <td align="center"><?= $hasilProduk['stok_barang'] ?></td>
                    <td align="center"><?=  buatRupiah($hasilProduk['harga_barang'])  ?></td>
                    <td align="center"><?= $hasilProduk['kategori_barang'] ?></td>
                    <td align="center">
                        <a href="edit.php?kode=<?=$hasilProduk['kode_barang']?>">Edit</a> | 
                        <a href="process/hapus.php?kode=<?=$hasilProduk['kode_barang']?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>

    <!-- Tambah Produk -->
    <div class="form_produk" data-aos="fade-up-left" data-aos-duration="1200" data-aos-offset="500" data-aos-delay="250">
        <h2>Tambah Produk</h2>
        <form  action="process/tambah_produk.php" method="GET" class="form-tamu">
            <label for="kode"> Kode Produk: <input type="text" name="kode" id="kode" placeholder="Masukan Kode Produk" required></label>
            <label for="nama"> Nama Produk: <input type="text" name="nama" id="nama" placeholder="Masukan nama produk" required></label>
            <label for="stok"> Stok Barang: <input type="number" name="stok" id="stok" placeholder="Masukan jumlah stok produk" required></label>
            <label for="harga"> Harga Produk: <input type="number" name="harga" id="harga" placeholder="Masukan harga produk" required></label>
            <label for="bidang"> Kategori Produk: 
                <select name="bidang" id="bidang">
                    <option value="" selected="true" disabled="disabled">Kategori Barang:</option>
                    <option value="Promo" > Promo </option>
                    <option value="Minuman" > Minuman </option>
                    <option value="Happy Meal" > Happy Meal </option>
                    <option value="Happy Meal" > Promo dan Minuman </option>
                </select>
            </label>
            <input type="submit" value="Input" name="input">    
        </form>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const menu= document.querySelectorAll('.item');

        menu.forEach((img, i) => {
        img.dataset.aos = 'fade-down';
        img.dataset.aosDelay = i * 150;
        img.dataset.aosDuration = 1000;
        img.dataset.aosOffset = 400;
        });

        AOS.init();
  </script>

    <?php
        include_once 'footer.php';

    ?>
</body>
</html>