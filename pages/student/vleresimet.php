<?php

require "../../resources/parts/header_student.php";
$html1 ='<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
        <script src="../../resources/assets/js/student.js"></script>
         
    </head>  
    <body>';     
       $html2 ='
  <!-- Tek menyja “Vlerësimet” studenti do të ketë mundësi të shohë vlerësimin që i është bërë për
secilën detyrë (edhe këtu të implementohen filterat sipas lëndës dhe semestrit). -->
          
          <h1 style="margin-left:300px;">Vlerësimet</h1><hr><br>
          <table id="customers">
            <tr>
              <th>Detyra</th>
              <th>Lënda</th>
              <th>Semestri</th>
              <th>Vlerësimi</th>
            </tr>     
          </table>
    </body>
</html>';

echo $html1;
render_header();
echo $html2;

?>