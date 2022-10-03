<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | IlhamShop</title>
    <link rel="shortcut icon" href="image/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <?php
        include_once 'header.php'
    
    ?>

    <!-- Konten About -->
    <div class="container_about">
        <!-- Visi -->
        <div class="img_visi">
            <img data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000" src="image/visi.jpg" alt="">
            <div class="visi" data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000" data-aos-delay="250">VISI</div>
            <div class="detail_visi" data-aos="fade-up-left" data-aos-offset="420" data-aos-duration="1000" data-aos-delay="300">
                Visi McDonald’s adalah menjadi restoran cepat saji dengan pelayanan terbaik di dunia. Untuk mencapai visi ini, McDonald’s selalu menjamin mutu produk-produknya, memberikan pelayanan yang memuaskan, menawarkan kebersihan dan keamanan produk pangan serta nilai-nilai tambah lainnya. Senyum konsumen adalah hal penting untuk McDonald's.
            </div>
        </div>

        <!-- Misi -->
        <div class="img_misi">
            <img src="image/visi.jpg" alt="" data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000">
            <div class="misi" data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000" data-aos-delay="250">MISI</div>
            <div class="detail_misi" data-aos="fade-up-right" data-aos-offset="420" data-aos-duration="1000" data-aos-delay="300">
                <ul>
                    <li>Menjadi perusahaan terbaik bagi semua karyawan kami di setiap komunitas di seluruh dunia.</li>
                    <li>Menghadirkan pelayanan dengan sistem operasional yang unggul bagi setiap konsumen kami di setiap restoran cabang McDonald’s.</li>
                    <li>Terus mengalami perkembangan ke arah yang menguntungkan sebagai sebuah brand, serta terus mengembangkan sistem operasional McDonald’s ke arah yang lebih baik lagi lewat inovasi dan teknologi.</li>
                <ul/>  
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <?php
        include_once 'footer.php';

    ?>


</body>
</html>