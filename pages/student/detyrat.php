<?php
 
 require "../../resources/parts/header_student.php";

 $html1 = '
 <!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
 
    </head>  
    <body>';     
       
         $html2 ='
          <h1 style="margin-left:300px;">Detyrat e mia</h1><hr><br>
          <table id="customers">
            <tr>
              <th>Detyra</th>
              <th>Lënda</th>
              <th>Semestri</th>
              
            </tr>
          </table>          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>

    </body>
</html>
';

    echo $html1;
    render_header();
    echo $html2;

?>