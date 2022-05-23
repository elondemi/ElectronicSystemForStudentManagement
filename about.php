<?php  

require "resources/parts/header.php";
require "resources/parts/footer.php";


$html1 = '<!DOCTYPE html>
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
  <style>
    div.gallery {
      border: 1px solid #ccc;
    }
    
    div.gallery:hover {
      border: 1px solid #777;
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
    }
    
    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }
    
    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }
    
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
      
    }
    p.outset {border-style: outset;}
    </style>

</head>

<body>

    ';
    
    $html2 ='
  
   <br><br><br><br><br><br>


   <p class="outset">The staff:</p>

  <br>
<div class="responsive">
  <div class="gallery">
      <img src="resources/assets/images/staff/blerim.png" alt="Cinque Terre" width="600" height="400">
    <div class="desc">Blerim Rexha</div>
  </div>
</div>


<div class="responsive">
<div class="gallery">
<img src="resources/assets/images/staff/isak.jpg" alt="Cinque Terre" width="600" height="400">
<div class="desc">Isak Shabani</div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
  <img src="resources/assets/images/staff/dhurata.jpg" alt="Cinque Terre" width="600" height="400">
<div class="desc">Dhurate Hyseni</div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
  <img src="resources/assets/images/staff/valon.png" alt="Cinque Terre" width="600" height="400">
<div class="desc">Valon Raça</div>
</div>
</div>



<div class="clearfix"></div>
   
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
<script src="assets/js/main.js"></script> 

</body>

</html>

';
echo $html1;
render_header();
echo $html2;
render_footer();
echo $html3;
?>