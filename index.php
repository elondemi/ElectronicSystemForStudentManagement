
<?php

require "resources/parts/header.php";
require "resources/parts/footer.php";


$html1 = '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fakulteti i Inxhinierise Elektrike dhe Kompjuterike</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="resources/assets/img/favicon.png" rel="icon">
  <link href="resources/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="resources/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="resources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="resources/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="resources/assets/css/style.css" rel="stylesheet">


</head>

<body>

  ';
  
  $html2= '
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(resources/assets/images/1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Universiteti i Prishtines "Hasan Prishtina"</h2>
                <p class="animate__animated animate__fadeInUp">Aty ku suksesi eshte primar!</p>
                <div>
                  
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(resources/assets/images/slide/1.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                
                <div>
                  
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(resources/assets/images/slide/slide1.1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><pre>
 Nënshkruhet marrveshja në mes të FIEK
 dhe
Odës Ekonomike Amerikane</pre></h2>
               
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lexo me shume</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Marrveshja mes Fiekut dhe Odes Amerikane</h3>
              <p>
                Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike ka nënshkruar Memorandumin e Mirëkuptimit me “Odën Ekonomike Amerikane në Kosovë”, qëllimi i të cilit është të ofrojë këshilla profesionale për bizneset në fushën e inxhinierisë elektrike dhe kompjuterike dhe të mundëson kryerjen e praktikës profesionale për studentët, pranë bizneseve anëtare të Odës Ekonomike Amerikane në Kosovë.
              </p>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   ';
   
   
   $html3 = '
   <!-- Vendor JS Files -->
<script src="resources/assets/vendor/purecounter/purecounter.js"></script>
<script src="resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="resources/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="resources/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="resources/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="resources/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="resources/assets/js/main.js"></script>
</body>

</html>

';

echo $html1;
render_header();
echo $html2;
render_footer();
echo $html3;
?>