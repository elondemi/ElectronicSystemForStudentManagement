<?php 
 require "../../resources/parts/header_student.php";


 
session_start();
if(isset($_SESSION['logged_user'])){
  require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/CoursesRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/AssignmentRepository.php";


  if($_SESSION['user_type'] == 'student'){
    $students = (new StudentRepository())->selectStudent((int)$_SESSION['logged_user']);
    $course = (new CoursesRepository()) ->selectCourses($students);
    $assignments = (new AssignmentRepository()) -> getAllByCourses($students);
   
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
  
  <h1 style="margin-left:300px;">Detyrat e mia</h1><hr><br>
  <table id="customers">
    <tr>
      <th>Detyra</th>
      <th>Lënda</th>
      <th>Semestri</th>
    </tr>
    <?php foreach($course as $course): ?>
          <tr>
            <td><?= $course->getAssignment_title() ?></td>
            <td><?= $course->getCourse_name() ?> </td>
            <td><?= $course->getCourse_semester() ?></td>
            </td>
          </tr>
          <?php endforeach; ?>
  </table>          
</body>
</html>
