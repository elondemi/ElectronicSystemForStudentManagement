<?php 
 require "../../resources/parts/header_student.php";


 
session_start();
if(isset($_SESSION['logged_user'])){
  require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/StudentRepository.php";
  require_once __DIR__ . "/../../resources/query_handler/StudentCourseRepository.php";



    if ($_SESSION['user_type'] == 'student') {
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

    <link href="../../resources/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="../../resources/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
  </head>  
  <body>     
    <?php render_header($students) ?>
     <h1 style="margin-left:300px;margin-bottom: 40px;">Dorëzo Detyrën</h1><hr>
        <form action="dorezo_lenden.php?student_id=<?= $students->getStudent_id() ?>" method="POST">
           <table id="customers">
             <tr>
               <th><label for="lenda">Zgjedh Lenda</label></th>
               <th><label for="semestri">Zgjedh  Semestrin</label></th>
               <th><label for="detyra">Zgjedh  Detyren</label></th>
               <th><label for="detyra">Shkruaj linkun ne GitHub</label></th>
             </tr>  
             <tr>
                <td>
                     <input type="text"  placeholder="Zgjedh lenden" name="lenda"> </input>
                </td>
                <td>
                     <input type="text" placeholder="Zgjedh semestrin" name="semestri"> </input>
                </td>
                <td>
                      <input type="text" placeholder="Zgjedh detyren" name="detyra"> </input>
                 </td>
                 <td>
                 <input type="text" placeholder="Shkruaj linkun" name="linku"> </input>
                       <input style="position:relative;left:150px; " type="submit" name="dorezo_detyren"> </input>
                       
                    </form>   
                 </td>
             </tr>
        </form>
    </body>
</html>
