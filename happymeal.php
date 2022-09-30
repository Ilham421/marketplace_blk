<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Happy Meal</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <?php
        include 'header.php'

    ?>

    <div class="menuuu"  data-aos="fade-up-left" data-aos-offset="100" data-aos-duration="1000"> 
      <h1>HAPPY MEAL</h1>
    </div>
    <!-- Menu Promo -->
    <section class="menu">
        <div class="item">
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/happy-1.png" alt="menu 1" />
          </div>
          <div class="keterangan">
            
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
            </div>
          </div>
          <div class="nama">
            Happy Meal Egg & Cheese Muffin
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 39.500</span>
          </div>
        </div>
        <div class="item">
          <nav>
            <a href="#">
              <span class="material-icons">
                shopping_basket
              </span>
            </a>
            <a href="#">
              <span class="material-icons">
                favorite
              </span>
            </a>
            <a href="#" class="active">
              <span class="material-icons">
                visibility
              </span>
            </a>
          </nav>
          <div class="foto">
            <img src="image/happy-2.png" alt="menu 2" />
          </div>
          <div class="keterangan">
            
            <div class="bintang">
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons active">star</span>
              <span class="material-icons grey">star</span>
            </div>
          </div>
          <div class="nama">
            Happy Meal Ayam
          </div>
          <div class="harga">
            Harga <span class="merah">Rp. 39.500 </span> 
          </div>
        </div>
      </section>


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
        include 'footer.php'

    ?>
</body>
</html>