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
          
          <img class="logo" src="../../resources/assets/images/logo.png" alt="Logo" style="width:110px">
        </div>    
         <br><br>
         <div id="mySidenav" class="sidenav">
            <img src="../../resources/assets/images/slide/prof_img1.jpg" alt="Avatar" style="width: 100px">
            <br><br>
            <form action="xxxx.php" method="post">
              <span style="margin-left:25px"><input type="text" name="name_student"><br></form></span>
            <p>Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike</p>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="studentpage.php">Home</a>
            <br><br>
            <p class="asd">Menyte</p>
          
            <a href="lendet.php">Lëndët</a>
            <a href="detyrat.php">Detyrat e mia</a>
            <a href="dorezo_lenden.php">Dorëzo detyrën</a>
            <a href="vleresimet.php">Vlerësimet</a>
            <a href="../../FAQ.php">FAQ</a>
            <a href="profili.php">Profili</a>
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