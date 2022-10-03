
<!-- lINK css dan javascript -->
<head>
  <link rel="shortcut icon" href="image/favico.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootrstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="css/navbar.css">
</head>


<header>
  <!-- Cek Jaringan -->
  <section id="statusjaringan"></section>
  
  <!-- Navbar -->
  <div class="topnav" id="myTopnav" data-aos="fade-down" data-aos-duration="1000">
      <div class="kemnaker">
          IlhamShop
          <a href="index.php">HOME</a>
          <a href="produk.php">DAFTAR BARANG</a>
          <a href="about.php">TENTANG</a>
      </div>

      <div class="kanan">
        <?php
          if(isset($_SESSION)){
              if($_SESSION['loggedin'] == false){
                 echo "<a href='login.php'>Login</a>";
             }else{
               echo "<a href='process/logout.php'>Logout</a>";
             }
          }else{
                 echo "<a href='login.php'>Login</a>";
                 echo "<a href='register.php'>Registrasi</a>";
          }
        ?>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

  <!-- Corousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/banner-1.jpg" alt="" style="width:100%; height: 600px;">
      </div>
      <div class="item">
        <img src="image/banner-2.jpg" alt="" style="width:100%; height: 600px;">
      </div>
      <div class="item">
        <img src="image/banner-3.jpg" alt="N" style="width:100%; height: 600px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

 
  <script>
    function loginn() {
      window.location.assign('login.php');
    }

    function register() {
      window.location.assign('register.php');
    }
     function logout() {
      window.location.assign('process/logout.php');
    }
  </script>

<script src="js/cekjaringan.js"></script>
