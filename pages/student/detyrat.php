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
  
  <h1 style="margin-left:300px;">Detyrat e mia</h1><hr><br>
  <table id="customers">
    <tr>
      <th>Detyra</th>
      <th>Lënda</th>
      <th>Semestri</th>
    </tr>
  </table>          
</body>
</html>
