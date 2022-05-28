<?php
require "../../resources/parts/header_student.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Studentpage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="../../resources/assets/css/student.css" rel="stylesheet">
        <script src="../../resources/assets/js/student.js"></script>
    </head>  
    <body>
        <?php render_header() ?>
                
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
                <span style="margin-left: 165px;"><label name="emri_studenti" >  ' . $studenti->getStudent_name() . " " . $studenti->getStudent_surname() . ' </label><br></span>
                <p style="color:rgb(207, 204, 204);font-size:14px;">Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike </p><br><br>
                <span style="margin-left:50px;"><label for="nr_personal">Nr Personal</label><hr>
                <label name="nr_personal" >  ' . $studenti->getStudent_nr_personal() .  ' </label><br><br></span>
                <span style="margin-left:50px;"> <label for="datelindja">Datelindja</label><hr>
                <label name="datelindja" >  ' . $studenti->getStudent_datelindja() .  ' </label><br><br></span>
                <span style="margin-left:50px;"><label for="Gjinia">Gjinia</label><hr>
                <label name="gjinia" >  ' . $studenti->getStudent_gjinia() .  ' </label><br><br></span>
         </form>
          </div>
          <div class="profili2">
        <p style="text-align: left;color:rgb(255, 246, 246);margin-left:35px;margin-top:15px;font-weight: bold;font-size: 25px;margin-bottom:30px;">Te Dhenat e Studentit </p>
        <hr>
        <div style="margin-left:100px;margin-top: 60px;">
        <form action="/xxxxx.php" method="POST">
        <label for="username">Username:</label>
        <label name="username" >  ' . $studenti->getStudent_username() . ' </label><br><br>
        <label for="emailz">E-mail Zyratar:</label>
        <label name="emailz" >  ' . $studenti->getStudent_emailz() . ' </label><br><br>
        <label for="email">E-mail :</label>
        <label name="email" >  ' . $studenti->getStudent_email() . ' </label><br><br>
        <label for="telefoni">Telefoni :</label>
        <label name="telefoni" >  ' . $studenti->getStudent_telefoni() .  ' </label><br><br>
        <label for="adresa">Adresa :</label>
        <label name="adresa" >  ' . $studenti->getStudent_adresa() .  ' </label><br><br>
      
        </form>
        <button><a href="modifiko_profilin.php">Modifiko te dhenat</a></button>
        </div>
        </div>
        </div>
    </body>
</html>