<?php 
 require "../../resources/parts/header_student.php";


 
session_start();
if(isset($_SESSION['logged_user'])){
  require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/CoursesRepository.php";
  require_once __DIR__ . "/../../resources/FormHandlers/lendet/regjistro.php";
  
  if($_SESSION['user_type'] == 'student'){
    $students = (new StudentRepository())->selectStudent((int)$_SESSION['logged_user']);
    $enrolledCourses = (new CoursesRepository())->selectEnrolledBy($students);
    $courses = (new CoursesRepository())->selectNotEnrolledYet($students);
    // $courses = (new CoursesRepository())->selectAllCourses();

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
        <!-- Programimi në internet, DB, SO, Algoritmet. -->
        <h1 style="text-align: center;margin-bottom:50px;">Lëndët e regjistruara, studenti : <?php echo $students->getStudent_name()  . " " .  $students->getStudent_surname()  ?>  </h1>
        <hr>
        <table id="customers">
          <thead>
            <tr>
              <th>Lëndët</th>
              <th>Pershkrimi</th>
              <th>ECTS</th>
              <th>Semestri</th>
              <!-- <th>Regjistro</th> -->

            </tr>
          </thead>
            <tbody>
          <?php foreach($enrolledCourses as $course): ?>
          <tr>
            <th scope="row"><?= $course->getCourse_name() ?></th>
            <td><?= $course->getCourse_description() ?> </td>
            <td><?= $course->getCourse_ects() ?></td>
            <td><?= $course->getCourse_semester() ?></td>
            <!-- <td> <a href="lendet.php?course_id=<?= $course->getCourse_id() ?>"> <button type="button" class="btn btn-primary">Regjistro</button> </a> -->

            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
        <h1 style="text-align: center;margin-bottom:50px;">Lëndët e paregjistruara, studenti : <?php echo $students->getStudent_name()  . " " .  $students->getStudent_surname()  ?>  </h1>
        <hr>
        <table id="customers">
          <thead>
            <tr>
              <th>Lëndët</th>
              <th>Pershkrimi</th>
              <th>ECTS</th>
              <th>Semestri</th>
              <th>Regjistro</th>

            </tr>
          </thead>
            <tbody>
          <?php foreach($courses as $course): ?>
          <tr>
            <th scope="row"><?= $course->getCourse_name() ?></th>
            <td><?= $course->getCourse_description() ?> </td>
            <td><?= $course->getCourse_ects() ?></td>
            <td><?= $course->getCourse_semester() ?></td>
            <td> <a href="lendet.php?course_id=<?= $course->getCourse_id() ?>"> <button type="button" class="btn btn-primary">Regjistro</button> </a>
            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>
        </table>

    </body>
</html>