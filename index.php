<!DOCTYPE html>

<!-- Konekas Ke Database -->
<?php
    // Header
    include 'header.php';
    session_start();
    include_once 'process/koneksi.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | IlhamShop</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product.css">
</head>

<body>
    <!-- Bagian Konten Home -->
    <div class="menuuu"  data-aos="fade-up-left" data-aos-offset="350" data-aos-duration="1000"> 
      <h1>CATTEGORY</h1>
    </div>

    <section class="menu">
            <div class="item" data-aos="fade-up-right" data-aos-offset="380" data-aos-duration="1200" data-aos-delay="150">
              <div class="badge"><a href="promo.php"> MENU PROMO</a></div>
              </nav>
              <div class="foto">
                <img src="image/menu-14.png" alt="menu 1" />
              </div>
              <div class="keterangan">
              </div>
            </div>
            <div class="item" data-aos="flip-left" data-aos-offset="380" data-aos-duration="1200" data-aos-delay="250">
                <div class="badge"><a href="drinks.php">DRINKS</a></div>
                </nav>
                <div class="foto" >
                    <img src="image/menu-13.png" alt="menu 1" />
                </div>
                <div class="keterangan">
                </div>
              </div>
              <div class="item" data-aos="fade-up-left" data-aos-offset="380" data-aos-duration="1200" data-aos-delay="150">
              <div class="badge"><a href="happymeal.php">HAPPY MEAL</a></div>
              </nav>
              <div class="foto">
                <img src="image/menu-6.png" alt="menu 1" />
              </div>
              <div class="keterangan">
              </div>
            </div>
        </section>
    
</body>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<!-- Footer -->
<?php
    include 'footer.php';
?>
</html>