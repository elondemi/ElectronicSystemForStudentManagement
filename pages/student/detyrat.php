<?php
 
 require "../../resources/parts/header_student.php";
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
  <?php render_header() ?>
  
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
