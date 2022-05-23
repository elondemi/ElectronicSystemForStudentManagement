<?php 
 require "../../resources/parts/header_student.php";

$html1 = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">


    </head>  
    <body>';
    
    

    $html2 ='      
          <!-- Programimi në internet, DB, SO, Algoritmet. -->
          <h1 style="text-align: center;">Lëndët e Studentit</h1>
          <hr>
          <br><br><br>

          <table id="customers">
            <tr>
              <th>Lëndët</th>
              <th>Profesori</th>
              <th>Lista e Detyrave</th>
            </tr>
            <tr>
              <td>Programimi në internet</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.html" style="color:white;">Detyrat </a></th>
              
            </tr>
            <tr>
              <td>Baza e të Dhënave</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.html"style="color:white;">Detyrat </a></th>
            </tr>
            <tr>
              <td>Programimi në Objekte</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.html"style="color:white;">Detyrat </a></th>
            </tr>
            <tr>
              <td>Algoritmet dhe Struktura</td>
              <td>Dhurate Hyseni</td>
              <th><a href="lista.html"style="color:white;">Detyrat </a></th>
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
</html>';

echo $html1;
render_header();
echo $html2;

?>