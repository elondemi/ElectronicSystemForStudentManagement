<?php

require "../../resources/parts/header_professor.php";
require "../../resources/parts/footer.php";



session_start();
if(isset($_SESSION['logged_user'])){

  require_once __DIR__ . "/../../resources/query_handler/ProfessorRepository.php";
  
  require_once __DIR__ . "/../../resources/query_handler/CoursesRepository.php";
  if($_SESSION['user_type'] == 'professor'){
    $professor = (new ProfessorRepository())->selectProfessor((int)$_SESSION['logged_user']);
    $subjects = (new CoursesRepository())->selectAllSubjects($professor);

  }
} else {
  //useri nuk eshte logu 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fakulteti i Inxhinierise Elektrike dhe Kompjuterike</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../resources/assets/images/favicon.png" rel="icon">
  <link href="../../resources/assets/images/apple-touch-icon.png" rel="apple-touch-icon">

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



<?php render_header($professor) ?>

<div style="position: relative; width: 100%; top: 120px;">
      <table  class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Emri dhe mbiemri i studentit</th>
            <th scope="col">Emri i lendes</th>
            <th scope="col">Emri i detyres</th>
            <th scope="col">Semestri</th>
      
    
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Engjell Bunjaku</td>
            <td>Interneti </td>
            <td>####</td>
            <td>3</td>
           
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Endrit Hoda</td>
              <td>POO </td>
              <td>####</td>
              <td>3</td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Elon Demi </td>
              <td>Arkitekture te kompjutereve</td>
              <td>####</td>
              <td>3</td>
          </tr>
        </tbody>
      </table>
        </div>

        
  <?php render_footer() ?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../resources/assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../resources/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../resources/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../resources/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../resources/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../resources/assets/js/main.js"></script>

</body>

</html>