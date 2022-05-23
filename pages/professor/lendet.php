<?php
    require "../../resources/parts/header_professor.php";
    require "../../resources/parts/footer.php";


    $html1 = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <title>Fakulteti i Inxhinierise Elektrike dhe Kompjuterike</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
    
      <!-- Favicons -->
      <link href="../../resources/assets/img/favicon.png" rel="icon">
      <link href="../../resources/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href="../../resources/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href="../../resources/assets/css/style.css" rel="stylesheet">
    
    
    </head>
    
    <body>
    
    ';
    $html2='   
    
    
     <div style="position: absolute; width: 100%; top: 20%;">
      <table  class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Emri i lëndës</th>
            <th scope="col">Përshkrimi i lëndës</th>
            <th scope="col">ECTS</th>
            <th scope="col">Semestri</th>
            <th scope="col">Modifiko lëndën</th>
    
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Interneti</td>
            <td>Lenda ka te bej <br> rreth html, css, javascript </td>
            <td>5</td>
            <td>3</td>
            <td> <a href="modifiko_lenden.php"> <button type="button" class="btn btn-primary">Modifiko lëndën</button> </a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>POO</td>
            <td>Lenda ka te bej <br> rreth gjuhes programuese java </td>
            <td>5</td>
            <td>3</td>
            <td><a href="modifiko_lenden.php"> <button type="button" class="btn btn-primary">Modifiko lëndën</button> </a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>KNK</td>
            <td>Lenda ka te bej <br> rreth zhivilimit te aplikacioneve </td>
            <td>5</td>
            <td>4</td>
            <td><a href="modifiko_lenden.php"> <button type="button"  class="btn btn-primary">Modifiko lëndën</button> </a></td>
          </tr>
        </tbody>
      </table>
        </div>
      </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    
     </br>
    </br>
    </br>
    </br>
     </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    
    </br> 
       
       <a href="shto_lende.php"> <button type="button" style="position:relative;left:80%;" class="btn btn-success">Shto lëndë</button> </a>
    
        
    ';
    $html3 = '
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="../../resources/assets/vendor/purecounter/purecounter.js"></script>
<script src="../../resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../resources/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../resources/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../resources/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../resources/assets/vendor/php-email-form/validate.js"></script>
    
      <!-- Template Main JS File -->
      <script src="../../resources/../../assets/js/main.js"></script>
    
    </body>
    
    </html>';

    echo $html1;
render_header();
echo $html2;
render_footer();
echo $html3;
?>