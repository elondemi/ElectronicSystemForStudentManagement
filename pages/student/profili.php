<?php

require "../../resources/parts/header_student.php";

$html1 = '<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
        <script src="../../resources/assets/js/student.js"></script>
    </head>  
    <body>';     
                 
          $html2 = '
          <!-- Programimi në internet, DB, SO, Algoritmet. -->
          <h1 style="margin-left:300px;">Profili</h1>
          <hr>
          <br>   
          <div class="profili">  
              <br>
              <br>
            <img class="foto" src="assets/img/slide/prof_img1.jpg" alt="foto" style="width: 150px"><br>
              <br>
            <form action="/xxxxx.php" method="POST">
              <span style="margin-left: 165px;"><label for="name_student"></label>
              <input type="text" id="name_student" name="name_student"><br></span>
              <p style="color:rgb(207, 204, 204);font-size:14px;">Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike </p><br><br>
             <span style="margin-left:50px;"><label for="nr_personal">Nr Personal</label><hr>
              <input type="text" id="nr_personal" name="nr_personal"><br><br></span>
              <span style="margin-left:50px;"> <label for="datelindja">Datelindja</label><hr>
              <input type="text" id="datelindja" name="datelindja"><br><br></span>
              <span style="margin-left:50px;"><label for="Gjinia">Gjinia</label><hr>
              <input type="text" id="Gjinia" name="Gjinia"><br><br></span>
            </form>
          </div>
          <div class="profili2">
            <p style="text-align: left;color:rgb(255, 246, 246);margin-left:35px;margin-top:15px;font-weight: bold;font-size: 25px;margin-bottom:30px;">Te Dhenat e Studentit </p>
            <hr>
            <div style="margin-left:100px;margin-top: 60px;">
            <form action="/xxxxx.php" method="POST">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username"><br><br>
              <label for="email_z">E-mail Zyratar:</label>
              <input type="text" id="email_z" name="email_z"><br><br>
              <label for="email">E-mail :</label>
              <input type="text" id="email" name="email"><br><br>
              <label for="telefoni">Telefoni :</label>
              <input type="text" id="telefoni" name="telefoni"><br><br>
              <label for="adresa">Adresa :</label>
              <input type="text" id="adresa" name="adresa"><br><br>
              <button id="show">Ndysho Fjalekalimin</button>
             <input type="text" id="change_p" name="change_p"><br><br>
            </form>
            </div>
            </div>
          </div>
    </body>
</html>';

echo $html1;
render_header();
echo $html2;

?>