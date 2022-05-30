<?php
require "../../resources/parts/header_student.php";



session_start();
if (isset($_SESSION['logged_user'])) {
  require_once __DIR__ . "/../../resources/query_handler/ProfessorRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/AssessmentsRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";


  if ($_SESSION['user_type'] == 'student') {
    $students = (new StudentRepository())->selectStudent((int)$_SESSION['logged_user']);
    $assessments = (new AssessmentsRepository())->getAllAssessmentsByStudent($students);
    // var_dump($assignments);
    // die();
  }
} else {
  //useri nuk eshte logu 
}



?>
<!DOCTYPE html>
<html>

<head>
  <title>Studentpage</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link href="../../resources/assets/css/student.css" rel="stylesheet">
  <script src="../../resources/assets/js/student.js"></script>

  <link href="../../resources/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../resources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../resources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../resources/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../resources/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>

<body>
  <?php render_header($students) ?>
  <h1 style="margin-left:300px;margin: bottom 40px;">Vlerësimet</h1>
  <hr>
  <table id="customers">
    <tr>
      <th>Detyra</th>
      <th>Lënda</th>
      <th>Semestri</th>
      <th>Profesori</th>
      <th>Vlerësimi</th>
    </tr>
    <tbody>
      <!-- array(1) { [0]=> array(6) { ["student_name"]=> string(4) "Elon" ["student_surname"]=> string(4) "Demi" ["course_name"]=> string(18) "Bazat e te dhenave" ["assignment_title"]=> string(5) "MySQL" ["course_semester"]=> int(3) ["assignmet_grade"]=> int(10) } } -->
      <?php foreach ($assessments as  $assessment) : ?>
        <tr>
          <td><?= $assessment['assignment_title'] ?></td>
          <td><?= $assessment['course_name'] ?> </td>
          <td><?= $assessment['course_semester'] ?> </td>
          <td><?= $assessment['professor_name'] ?></td>
          <td><?= $assessment['assignmet_grade'] ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>