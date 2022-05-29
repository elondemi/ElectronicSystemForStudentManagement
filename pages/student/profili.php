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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    
        <div class="profili" style="left: 400px;">  
        <h1 style="position:relative;left:200px;"> Profili </h1> 
        
        <div >
        <table  class="table" style="position:relative;top:100px;">
        <tbody>
          <tr>
            <th scope="row">Emri: </th>
            <td> <?= $students->getStudent_name() ?></td>
            </td>
          </tr>
          <tr>
            <th scope="row">Mbiemri: </th>
            <td> <?= $students->getStudent_surname() ?></td>
            </td>
          </tr>
          <tr>
            <th scope="row">Email: </th>
            <td> <?= $students->getStudent_email() ?></td>
            </td>
          </tr>
        
        </tbody>
      </table>
      <a href="modifiko_profilin.php"> <button style="position:relative; top:200px;left:10%;" type="button" class="btn btn-primary">Modifiko te dhenat</button> </a>
        </div>
        </div>
        </div>
    </body>
</html>