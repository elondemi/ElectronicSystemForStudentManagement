<?php

require "../../resources/parts/header_student.php";
$html1 = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
        <script src="../../resources/assets/js/student.js"></script>
    </head>  
    <body>';     
        
       $html2 = '
          <button onclick="myFunction()">Kthehu mbrapa</button>
             
          <br><br><br>

          <form action="xxxxx.php" method="post" >
            <h1>
            <label for="lista">Lista e Detyrave nga Lënda </label>
            <input type="text" id="lenda" name="lenda"></h1><br><br>
          </form>
          <hr>
          
          <table id="customers">
            <tr>
              <th>Titulli i Detyrës</th>
              <th>Përshkrimin</th>
              <th>Kohën e Dorëzimit</th>
              <th>Specifikat e Detyrës </th>
            </tr>  

      
          </table>



    </body>
</html>';

echo $html1;
render_header();
echo $html2;


?>