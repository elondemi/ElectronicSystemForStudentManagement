<?php
$html = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
    </head>  
    <body>     
        <div class="top">
          
          <!-- e ueb sajtit duhet të përmbaj patjetër këto meny: Home,
          Lëndët, Detyrat e mia, Vlerësimet, Dorëzo detyrën, FAQ. Profili, -->
          
          <img class="logo" src="assets/img/logo.png" alt="Logo" style="width:110px">
        </div>    
         <br><br>
         <div id="mySidenav" class="sidenav">
            <img src="assets/img/slide/prof_img1.jpg" alt="Avatar" style="width: 100px">
            <br><br>
            <form action="xxxx.php" method="post">
              <span style="margin-left:25px"><input type="text" name="name_student"><br></form></span>
            <p>Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</p>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="studentpage.html">Home</a>
            <br><br>
            <p class="asd">Menyte</p>
          
            <a href="lendet.html">Lëndët</a>
            <a href="detyrat.html">Detyrat e mia</a>
            <a href="dorezodet.html">Dorëzo detyrën</a>
            <a href="vleresimet.html">Vlerësimet</a>
            <a href="FAQ.html">FAQ</a>
            <a href="profili.html">Profili</a>
          </div>
       
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


       


         
       
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>
         

          <script>
            function myFunction() {
              window.history.back();
            }
            </script>

    </body>
</html>';

echo $html;

?>