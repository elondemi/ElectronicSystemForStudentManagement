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
    <body>          
        
          <div class="Modifiko">
        <p style="text-align: left;color:rgb(255, 246, 246);margin-left:35px;margin-top:15px;font-weight: bold;font-size: 25px;margin-bottom:30px;">Modifiko te Dhenat </p>
        <hr>
        <div style="margin-left:100px;margin-top: 60px;">
        <form action="/xxxxx.php" method="POST">
         <h3>Ndrysho Fjalekalimin </h3>
        <label for="fjalekalimi_vjeter">Fjalekalimi i vjeter:</label>
        <input type="text" id="fjalekalimi_vjeter" name="fjalekalimi_vjeter"><br><br>
        <label for="fjalekalimi_ri">Fjalekalimi i ri:</label>
        <input type="text" id="fjalekalimi_ri" name="fjalekalimi_ri"><br><br>
        <input type="submit" name="Ruaj" value="Ruaj"><br><br><hr>
        </form>
        <form action="xxx.php" method="POST">
        <h3> Ndrysho Username</h3>
        <label for="username_old">Usernami i vjeter:</label>
        <input type="text" id="username_old" name="username_old"><br><br>
        <label for="username_new">Username  i ri:</label>
        <input type="text" id="username_new" name="username_new"><br><br>
        <input type="submit" name="Ruaj" value="Ruaj"><br><br><hr>
        </form>
        </div>
        </div>
    </body>
</html>';
render_header();
echo $html1;


?>