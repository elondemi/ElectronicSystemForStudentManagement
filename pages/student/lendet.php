<?php 
 require "../../resources/parts/header_student.php";


 
session_start();
if(isset($_SESSION['logged_user'])){
  require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";
  if($_SESSION['user_type'] == 'student'){
    $students = (new StudentRepository())->selectStudent((int)$_SESSION['logged_user']);
   
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
    </head>  
    <body>
    <?php render_header($students) ?>    
        <!-- Programimi në internet, DB, SO, Algoritmet. -->
        <h1 style="text-align: center;margin-bottom:50px;">Lëndët e Studentit</h1>
        <hr>
        <table id="customers">
          <thead>
            <tr>
              <th>Lëndët</th>
              <th>Profesori</th>
              <th>Lista e Detyrave</th>
            </tr>
          </thead>
            <tbody>
          <?php foreach($students as $course): ?>
          <tr>
            <th scope="row"><?= $course->getCourse_id() ?></th>
            <td><?= $course->getCourse_name() ?></td>
            <td><?= $course->getCourse_description() ?> </td>
            <td><?= $course->getCourse_ects() ?></td>
            <td><?= $course->getCourse_semester() ?></td>
            <td> <a href="modifiko_lenden.php?course_id=<?= $course->getCourse_id() ?>"> <button type="button" class="btn btn-primary">Modifiko lëndën</button> </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
         
    </body>
</html>